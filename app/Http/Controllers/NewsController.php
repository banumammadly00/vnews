<?php

namespace App\Http\Controllers;

use App\News;
use App\Authors;
use App\Comments;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use SebastianBergmann\Diff\Output\AbstractChunkOutputBuilder;


class NewsController extends Controller
{
    public function home(Request $request)
    {
        $main_news = News::active()->where('main' , 1)->orderBy('updated', 'desc')->limit(10)->get();

        $datetime =    date('Y-m-d H:i:s.ms' , strtotime(now()->subMonth(2)));
        $most_viewed = News::active()->where('updated', '>', $datetime)->orderBy('read', 'desc')->limit(4)->get();

        $category_list = Categories::active()->orderBy('id', 'desc')->get();

     // echo $request->cookie('ip');
        echo $request->cookie('id');

        return view('news.home', [
              'main_news'      =>  $main_news,
              'most_viewed'    =>  $most_viewed,
              'category_list'  =>  $category_list
        ]);

    }


    public function index(News $id, Request $request)
    {
        if($id->status==1){
        $related_news  = News::where('status' , 1)->where( 'sub_category' , $id->sub_category)->limit(3)->orderBy('updated', 'desc')->get();
        $news_by_id = function ($news_id=0){ return News::find($news_id)->title;};

        $author=  Authors::find($id->author_id);
        $comments= Comments::where('news_id', $id->id)->get();

        //-------------------Read count-----------------
        $ips=  Redis::lrange("news_id:$id->id", 0, -1 );
          if(empty($ips)){

                  Redis::lpush( "news_id:$id->id", $request->ip() );
                  $id->increment('read');
          }else{
                  if(!in_array( $request->ip(), $ips) ){
                  Redis::lpush("news_id:$id->id", $request->ip());
                  $id->increment('read');
              }
          }


        return view('news.index', [
           'news'          =>  $id,
           'author'        =>  $author,
           'related_news'  =>  $related_news,
           'news_by_id'    =>  $news_by_id,
           'comments'      =>  $comments
       ]);

      }else{
           return view('404');
        }

}

}
