<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\News;
use App\Categories;

class CategoryNewsComposer
{
    public function compose(View $views)
    {
        $category_news = function ($category_id,  $sub_category , $limit=4) {
            return News::where(['status' => 1, 'category' => $category_id, 'sub_category' => $sub_category])
                       ->orderBy('updated', 'desc')
                       ->limit($limit)
                       ->get();
        };

        $category_name= function($category){
            $categories= Categories::find($category);
            return $category ? $categories->name : '';
        };
        $recent_news = News::where('status', 1)->orderBy('updated', 'desc')->limit(7)->get();

        $categories = function ($sub_category=0){
        return Categories::where(['status' => 1, 'sub_category' => $sub_category])->get();
        };


         $views->with([
             'category_news' =>  $category_news,
             'recent_news'   =>  $recent_news,
             'categories'    =>  $categories,
             'category_name' =>  $category_name
         ]);

   }

}
