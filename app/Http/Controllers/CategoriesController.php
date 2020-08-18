<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\News;

class CategoriesController extends Controller
{
    public function index(Categories $category) {

        $category->sub_category == 0 ? $news_by_category = News::active()->where( 'category' ,$category->id)->orderBy('updated', 'desc')->paginate(10)
                                     : $news_by_category = News::active()->where([ 'category' => $category->sub_category, 'sub_category' => $category->id ])->orderBy('updated', 'desc')->paginate(10);

       //$sub_category_news = News::where(['status' => 1, 'category' => $category->sub_category, 'sub_category' => $category->id ])->orderBy('updated', 'desc')->get() ;
       //return $category_news;

           return view('categories.index',[
               'news_by_category'  =>  $news_by_category,
               'category'          =>  $category,
            ]);
    }
}
