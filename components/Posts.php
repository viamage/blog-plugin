<?php namespace RainLab\Blog\Components;

use RainLab\Blog\Repositories\PostRepository;
use RainLab\Blog\ValueObjects\PostFilters;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Models\Category as BlogCategory;

class Posts extends ComponentBase
{
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;

    /**
     * Parameter to use for the page number
     * @var string
     */
    public $pageParam;

    /**
     * If the post list should be filtered by a category, the model to use.
     * @var Model
     */
    public $category;

    /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noPostsMessage;

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $postPage;

    /**
     * Reference to the page name for linking to categories.
     * @var string
     */
    public $categoryPage;

    /**
     * If the post list should be ordered by another attribute.
     * @var string
     */
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'rainlab.blog::lang.settings.posts_title',
            'description' => 'rainlab.blog::lang.settings.posts_description',
        ];
    }

    public function defineProperties()
    {
        return [
            'categoryFilter' => [
                'title'       => 'rainlab.blog::lang.settings.posts_filter',
                'description' => 'rainlab.blog::lang.settings.posts_filter_description',
                'type'        => 'string',
                'default'     => '{{ :category }}',
            ],
            'postsPerPage'   => [
                'title'             => 'rainlab.blog::lang.settings.posts_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'rainlab.blog::lang.settings.posts_per_page_validation',
                'default'           => '10',
            ],
            'noPostsMessage' => [
                'title'             => 'rainlab.blog::lang.settings.posts_no_posts',
                'description'       => 'rainlab.blog::lang.settings.posts_no_posts_description',
                'type'              => 'string',
                'default'           => 'No posts found',
                'showExternalParam' => false,
            ],
            'sort'           => [
                'title'       => 'rainlab.blog::lang.settings.posts_order',
                'description' => 'rainlab.blog::lang.settings.posts_order_description',
                'default'     => 'published_at',
            ],
            'sort_type'      => [
                'title'       => 'rainlab.blog::lang.settings.posts_order_type',
                'description' => 'rainlab.blog::lang.settings.posts_order_type_description',
                'default'     => 'desc',
            ],
            'historyMode'    => [
                'title'       => 'rainlab.blog::lang.settings.history_mode',
                'description' => 'rainlab.blog::lang.settings.history_mode_description',
                'type'        => 'checkbox',
                'default'     => false,
            ],
            'categoryPage'   => [
                'title'       => 'rainlab.blog::lang.settings.posts_category',
                'description' => 'rainlab.blog::lang.settings.posts_category_description',
                'type'        => 'dropdown',
                'default'     => 'blog/category',
                'group'       => 'Links',
            ],
            'postPage'       => [
                'title'       => 'rainlab.blog::lang.settings.posts_post',
                'description' => 'rainlab.blog::lang.settings.posts_post_description',
                'type'        => 'dropdown',
                'default'     => 'blog/post',
                'group'       => 'Links',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        return BlogPost::$allowedSortingOptions;
    }

    public $history;

    public function onRun()
    {
        $this->prepareVars();
        if ($this->property('historyMode')) {
            $this->history = $this->page['history'] = $this->getHistory();
        } else {
            $this->category = $this->page['category'] = $this->loadCategory();
            $this->posts = $this->page['posts'] = $this->listPosts();
            $currentPage = $this->posts->currentPage();
            $maxPage = $this->posts->lastPage();
            $this->page['currentPage'] = $currentPage;
            $this->page['maxPage'] = $maxPage;
        }
    }

    public function getHistory(){
        $repo = \App::make(PostRepository::class);

        return $repo->getHistoryPosts();
    }

    public function getFeaturedImage()
    {
        return $this->featured_images()->first();
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');

        /*
         * Page links
         */
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listPosts()
    {
        $category = $this->category ? $this->category->slug : null;

        /*
         * List all the posts, eager load their categories
         */
        $isPublished = !$this->checkEditor();
        /** @var PostRepository $repo */
        $repo = \App::make(PostRepository::class);
        $filters = new PostFilters();
        $filters->sort = $this->property('sort');
        $filters->sortType = $this->property('sortType');
        $filters->perPage = $this->property('postsPerPage');
        $filters->search = trim(input('search'));
        $filters->category = $category;
        $filters->published = $isPublished;
        $posts = $repo->getPaginated($filters);
        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $posts->each(
            function ($post) {
                $post->setUrl($this->postPage, $this->controller);

                $post->categories->each(
                    function ($category) {
                        $category->setUrl($this->categoryPage, $this->controller);
                    }
                );
            }
        );

        return $posts;
    }

    protected function loadCategory()
    {
        if (!$slug = $this->property('categoryFilter')) {
            return null;
        }

        $category = new BlogCategory;

        $category = $category->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $category->transWhere('slug', $slug)
            : $category->where('slug', $slug);

        $category = $category->first();

        return $category ?: null;
    }

    protected function checkEditor()
    {
        $backendUser = BackendAuth::getUser();

        return $backendUser && $backendUser->hasAccess('rainlab.blog.access_posts');
    }
}
