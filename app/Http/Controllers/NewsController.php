<?php

namespace App\Http\Controllers;

use App\News;
use App\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

use function MongoDB\BSON\toJSON;

class NewsController extends Controller
{
    public function home()
    {

        $main_news =   News::where(['status' => 1, 'main' => 1])->orderBy('updated', 'desc')->limit(10)->get();
        $datetime=  date('Y-m-d H:i:s.ms' , strtotime(now()->subMonth(2)));
        $most_viewed = News::where('status', 1 )->where('updated', '>', $datetime)->orderBy('read', 'desc')->limit(4)->get();

        $category_name= function($category){
           $categories= Categories::find($category);
           return $category ? $categories->name : '';
        };
        $category_list= Categories::where('status', 1)->orderBy('id', 'desc')->get();


        return view('news.home', [
              'main_news'      =>  $main_news,
              'most_viewed'    =>  $most_viewed,
              'category_name'  =>  $category_name,
              'category_list'     =>  $category_list
        ]);
    }


    public function index(News $id, Request $request)
    {
        $related_news  = News::where(['status' => 1, 'sub_category' => $id->sub_category,])->limit(3)->orderBy('updated', 'desc')->get();
        $previous_news = News::find($id->id-1)->title;

        $category_name= function($category){
            $categories= Categories::find($category);
            return $category ? $categories->name : '';
         };

echo $request->ip();
        return view('news.index', [
           'news'          =>  $id,
           'related_news'  =>  $related_news,
           'previous_news' =>  $previous_news,
           'category_name' =>  $category_name
       ]);
    }

}
