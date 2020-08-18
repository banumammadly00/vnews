<?php

namespace App\Http\Controllers;

use App\Comments;
use App\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request, News $id )
    {
        Comments::create([
            'comment'   =>  $request->comment,
            'news_id'   =>  $id->id,
            'user_id'   =>  auth()->id(),
            'user_name' =>  auth()->user()->name,
            'created'   =>  date("Y-m-d H:i:s")
        ]);

      $id->increment('comment');
      return redirect()->back();
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete(Comments $id)
    {
        $id->delete();
        News::find($id->news_id)->decrement('comment') ;
        return redirect()->back();
    }
}
