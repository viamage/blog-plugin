<?php
/**
 * Copyright (c) 2018 Viamage Limited
 * All Rights Reserved
 *
 *  NOTICE:  All information contained herein is, and remains
 *  the property of Viamage Limited and its suppliers, if any.
 *  The intellectual and technical concepts contained herein
 *  are proprietary to Viamage Limited and its suppliers and are
 *  protected by trade secret or copyright law, if not specified otherwise.
 *  Dissemination of this information or reproduction of this material
 *  is strictly forbidden unless prior written permission is obtained
 *  from Viamage Limited.
 *
 */

/**
 * Created by PhpStorm.
 * User: jin
 * Date: 3/28/18
 * Time: 6:37 PM
 */

namespace RainLab\Blog\Repositories;

use Carbon\Carbon;
use RainLab\Blog\Models\Post;
use RainLab\Blog\ValueObjects\PostFilters;

class PostRepository
{

    public function getMonthName($id){
        $arr = [
          1 => trans('rainlab.blog::lang.months.jan'),
          2 => trans('rainlab.blog::lang.months.feb'),
          3 => trans('rainlab.blog::lang.months.mar'),
          4 => trans('rainlab.blog::lang.months.apr'),
          5 => trans('rainlab.blog::lang.months.may'),
          6 => trans('rainlab.blog::lang.months.jun'),
          7 => trans('rainlab.blog::lang.months.jul'),
          8 => trans('rainlab.blog::lang.months.aug'),
          9 => trans('rainlab.blog::lang.months.sep'),
          10 => trans('rainlab.blog::lang.months.oct'),
          11 => trans('rainlab.blog::lang.months.nov'),
          12 => trans('rainlab.blog::lang.months.dec'),
        ];
        if(array_key_exists($id, $arr)){
            return $arr[$id];
        }
    }

    public function getPaginated(PostFilters $filters){
        $query = Post::with('categories')->with('featured_images');
        if($filters->category){
            $query = $query->whereHas('categories', function($q)use($filters){
               $q->where('slug', $filters->category);
            });
        }
        if($filters->published){
            $query = $query->where('published', true)->where('published_at', '<=', Carbon::now());
        }

        return $query->orderBy($filters->sort, $filters->sortType)->paginate($filters->perPage);

    }

    public function getHistoryPosts(){
        $data = \DB::table('rainlab_blog_posts')->where('published', true)->where('published_at', '<=', Carbon::now())
            ->select('published_at', 'title', 'slug')->get();
        $result = [];
        foreach($data as $post){
            $date = new Carbon($post->published_at);
            $result[$date->year][$this->getMonthName($date->month)] = $post;
        }
        return $result;
    }

    public function getBySlug(string $slug, bool $published = true){
        $post = new Post();

        $post = $post->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $post->transWhere('slug', $slug)
            : $post->where('slug', $slug);

        if ($published) {
            $post = $post->isPublished();
        }

        return $post->first();


    }
}