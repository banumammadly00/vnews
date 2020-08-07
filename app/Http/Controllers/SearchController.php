<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchs = News::search($request->search)->where('status', 1)->orderBy('updated' , 'desc')->paginate(10);

       // return $request->search;
       return view('news.search' , [
            'searchs' => $searchs
        ]);
    }


}
