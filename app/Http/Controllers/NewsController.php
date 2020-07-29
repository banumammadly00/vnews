<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function index()
    {
        //
    }

}
