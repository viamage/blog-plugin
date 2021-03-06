<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Solidna platforma blogera',
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Zarządzaj blogowymi postami',
        'posts' => 'Posty',
        'create_post' => 'utwórz post',
        'categories' => 'Kategorie',
        'create_category' => 'kategoria bloga',
        'tab' => 'Blog',
        'access_posts' => 'Zarządzaj blogowymi postami',
        'access_categories' => 'Zarządzaj blogowymi kategoriami',
        'access_other_posts' => 'Zarządzaj blogowymi postami innych użytkowników',
        'delete_confirm' => 'Czy aby na pewno jesteś pewien?',
        'chart_published' => 'Opublikowane',
        'chart_drafts' => 'Szkice',
        'chart_total' => 'Łącznie',
        'access_import_export' => 'rainlab.blog::lang.blog.access_import_export',
        'access_publish' => 'rainlab.blog::lang.blog.access_publish',
    ],
    'posts' => [
        'list_title' => 'Zarządzaj blogowymi postami',
        'filter_category' => 'Kategoria',
        'filter_published' => 'Ukryj opublikowane',
        'new_post' => 'Nowy post',
        'import_post' => 'rainlab.blog::lang.posts.import_post',
        'export_post' => 'rainlab.blog::lang.posts.export_post',
        'filter_date' => 'rainlab.blog::lang.posts.filter_date',
    ],
    'post' => [
        'title' => 'Tytuł',
        'title_placeholder' => 'Tytuł nowego posta',
        'slug' => 'Alias',
        'slug_placeholder' => 'alias-nowego-postu',
        'categories' => 'Kategorie',
        'created' => 'Utworzony',
        'updated' => 'Zaktualizowany',
        'published' => 'Opublikowany',
        'published_validation' => 'Proszę określić datę publikacji',
        'tab_edit' => 'Edytuj',
        'tab_categories' => 'Kategorie',
        'categories_comment' => 'Wybierz kategorie do których post należy',
        'categories_placeholder' => 'There are no categories, you should create one first!',
        'tab_manage' => 'Zarządzaj',
        'published_on' => 'Opublikowane',
        'excerpt' => 'Zalążek',
        'featured_images' => 'Załączone grafiki',
        'delete_confirm' => 'Czy naprawdę chcesz usunąć ten post?',
        'close_confirm' => 'Ten post nie jest zapisany.',
        'return_to_posts' => 'Wróć do listy postów',
        'content' => 'rainlab.blog::lang.post.content',
        'author_email' => 'rainlab.blog::lang.post.author_email',
        'created_date' => 'rainlab.blog::lang.post.created_date',
        'updated_date' => 'rainlab.blog::lang.post.updated_date',
        'published_date' => 'rainlab.blog::lang.post.published_date',
        'content_html' => 'rainlab.blog::lang.post.content_html',
    ],
    'categories' => [
        'list_title' => 'Zarządzaj kategoriami postów',
        'new_category' => 'Nowa kategoria',
        'uncategorized' => 'Bez kategorii',
    ],
    'category' => [
        'name' => 'Nazwa',
        'name_placeholder' => 'Nazwa nowej kategorii',
        'slug' => 'Alias',
        'slug_placeholder' => 'alias-nowej-kategorii',
        'posts' => 'Posty',
        'delete_confirm' => 'Czy naprawdę chcesz usunąć tę kategorię?',
        'return_to_categories' => 'Wróć do listy kategorii',
        'reorder' => 'rainlab.blog::lang.category.reorder',
        'color' => 'rainlab.blog::lang.category.color',
        'icon' => 'rainlab.blog::lang.category.icon',
        'description' => 'rainlab.blog::lang.category.description',
    ],
    'settings' => [
        'category_title' => 'Lista kategorii',
        'category_description' => 'Wyświetla listę blogowych kategorii na stronie.',
        'category_slug' => 'Alias kategorii',
        'category_slug_description' => 'Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.',
        'category_display_empty' => 'Pokaż puste kategorie',
        'category_display_empty_description' => 'Pokazuje kategorie, które nie posiadają postów',
        'category_page' => 'Strona kategorii',
        'category_page_description' => 'Nazwa strony kategorii gdzie są pokazywane linki. Ten parametr jest domyślnie używany przez komponent.',
        'post_title' => 'Post',
        'post_description' => 'Wyświetla pojedynczy post na stronie.',
        'post_slug' => 'Alias postu',
        'post_slug_description' => 'Szuka post po nazwie aliasu.',
        'post_category' => 'Strona kategorii',
        'post_category_description' => 'Nazwa strony kategorii gdzie są pokazywane linki. Ten parametr jest domyślnie używany przez komponent.',
        'posts_title' => 'Lista postów',
        'posts_description' => 'Wyświetla kilka ostatnich postów.',
        'posts_pagination' => 'Numer strony',
        'posts_pagination_description' => 'Ta wartość odpowiada za odczytanie numeru strony.',
        'posts_filter' => 'Filter kategorii',
        'posts_filter_description' => 'Wprowadź alias kategorii lub adres URL aby filtrować posty. Pozostaw puste aby pokazać wszystkie.',
        'posts_per_page' => 'Ilość postów na strone',
        'posts_per_page_validation' => 'Nieprawidłowa wartość ilości postów na strone',
        'posts_no_posts' => 'Komunikat o braku postów',
        'posts_no_posts_description' => 'Wiadomość, która ukaże się kiedy komponent nie odnajdzie postów. Ten parametr jest domyślnie używany przez komponent.',
        'posts_order' => 'Kolejność postów',
        'posts_order_description' => 'Parametr przez który mają być sortowane posty',
        'posts_category' => 'Strona kategorii',
        'posts_category_description' => 'Nazwa strony kategorii w wyświetlaniu linków "Posted into" [Opublikowano w]. Ten parametr jest domyślnie używany przez komponent.',
        'posts_post' => 'Strona postu',
        'posts_post_description' => 'Nazwa strony postu dla linków "Learn more" [Czytaj więcej]. Ten parametr jest domyślnie używany przez komponent.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
        'posts_order_type' => 'rainlab.blog::lang.settings.posts_order_type',
        'posts_order_type_description' => 'rainlab.blog::lang.settings.posts_order_type_description',
        'history_mode' => 'rainlab.blog::lang.settings.history_mode',
        'history_mode_description' => 'rainlab.blog::lang.settings.history_mode_description',
        'rssfeed_title' => 'rainlab.blog::lang.settings.rssfeed_title',
        'rssfeed_description' => 'rainlab.blog::lang.settings.rssfeed_description',
        'rssfeed_blog' => 'rainlab.blog::lang.settings.rssfeed_blog',
        'rssfeed_blog_description' => 'rainlab.blog::lang.settings.rssfeed_blog_description',
    ],
    'menuitem' => [
        'blog_category' => 'rainlab.blog::lang.menuitem.blog_category',
        'all_blog_categories' => 'rainlab.blog::lang.menuitem.all_blog_categories',
        'blog_post' => 'rainlab.blog::lang.menuitem.blog_post',
        'all_blog_posts' => 'rainlab.blog::lang.menuitem.all_blog_posts',
        'category_blog_posts' => 'rainlab.blog::lang.menuitem.category_blog_posts',
    ],
];