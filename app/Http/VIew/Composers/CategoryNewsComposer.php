<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\News;

class CategoryNewsComposer
{
   public function compose(View $views){

    $category_news = function ($category_id, $limit, $sub_category=0){
        return  News::where([ 'status'   => 1, 'category' => $category_id, 'sub_category' => $sub_category ])
                     ->orderBy('updated', 'desc')
                     ->limit($limit)
                     ->get();
    };

    $recent_news  = News::where('status', 1)->orderBy('updated', 'desc')->limit(7)->get();

     $views->with( 'category_news', $category_news );
     $views->with('recent_news',  $recent_news) ;
   }
}
