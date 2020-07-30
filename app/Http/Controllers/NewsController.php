<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class NewsController extends Controller
{
    public function home()
    {

        $main_news =   News::where(['status' => 1, 'main' => 1])->orderBy('updated', 'desc')->limit(10)->get();
        $recent_news = News::where('status', 1)->orderBy('updated', 'desc')->limit(10)->get();
        $most_viewed = News::where(['status' => 1])->orderBy('read', 'desc')->limit(4)->get();

        $category_name= function($category_id){
            $categories=  [ 'C', 'World','Photography', 'Food', 'Technology', 'Magazine','Sport', 'Blog', 'Lifestyle', 'Science', 'News', 'Asia', 'America', 'Europe', 'Gaming', 'Travel' ];
            return $categories[$category_id];
        };

        $category_news = function ($category_id, $limit , $sub_category=null ){
          return  News::where([ 'status' => 1, 'category' => $category_id ])->orWhere('sub_category', $sub_category)->orderBy('updated', 'desc')->limit($limit)->get();
        };

        return view('home.index', [
            'main_news'     =>  $main_news,
            'recent_news'   =>  $recent_news,
            'most_viewed'   =>  $most_viewed,
            'category_name'  =>  $category_name,
            'category_news'  =>  $category_news
        ]);
    }

    public function index()
    {
        //
    }

}
