<?php

namespace App\Http\Controllers;

use App\News;
use App\Categories;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Cookie;


class NewsController extends Controller
{
    public function home(Request $request)
    {

        $main_news =   News::where(['status' => 1, 'main' => 1])->orderBy('updated', 'desc')->limit(10)->get();

        $datetime=  date('Y-m-d H:i:s.ms' , strtotime(now()->subMonth(2)));
        $most_viewed = News::where('status', 1 )->where('updated', '>', $datetime)->orderBy('read', 'desc')->limit(4)->get();

        $category_list= Categories::where('status', 1)->orderBy('id', 'desc')->get();

     //   echo $request->cookie('ip');
        echo $request->cookie('id');

        return view('news.home', [
              'main_news'      =>  $main_news,
              'most_viewed'    =>  $most_viewed,
              'category_list'  =>  $category_list
        ]);

    }


    public function index(News $id, Request $request)
    {
        $related_news  = News::where(['status' => 1, 'sub_category' => $id->sub_category,])->limit(3)->orderBy('updated', 'desc')->get();
        $previous_news = News::find($id->id-1)->title;


        //-------------------Read count-----------------
       /* if($request->cookie('id')!= $id->id || $request->cookie('ip') != $request->ip()) {
            Cookie::queue('id', $id->id, 1);
            Cookie::queue('ip', $request->ip(), 1);
           $id->increment('read');
       }*/

//        if($id->id != $request->cookie('id')){
//           if( $request->cookie('ip') == $request->ip() ){
//               $id->increment('read');
//           }
//        }else if($id->id == $request->cookie('id')){
//            if( $request->cookie('ip') != $request->ip() ){
//                $id->increment('read');
//            }
//        }

        return view('news.index', [
           'news'          =>  $id,
           'related_news'  =>  $related_news,
           'previous_news' =>  $previous_news,
       ]);
    }

}
