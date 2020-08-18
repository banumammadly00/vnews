<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'NewsController@home');
Route::get('/news/{id}', 'NewsController@index')->name('news.index');
Route::post('/news/{id}', 'CommentController@store')->name('comment.store');
Route::get('/comment/delete/{id}','CommentController@delete')->name('comment.delete');

Route::get('category/{category}', 'CategoriesController@index')->name('category.index');
Route::post('/search', 'SearchController@index')->name('search.index');
Auth::routes();

