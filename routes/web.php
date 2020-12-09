<?php

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

Auth::routes();

Route::get('/', 'BlogController@index');
Route::get('/posts/{slug}', 'BlogController@blog_post')->name('blog.post');
Route::get('/list-post', 'BlogController@list_post')->name('blog.list');
// {category} is take from model Category because take a data slug category from model Category
Route::get('/list-category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/search', 'BlogController@search')->name('blog.search');
Route::group(['middleware'=>['auth','CheckLevel:1']], function () {
    Route::resource('/user', 'UserController');
});
Route::group(['middleware'=>['auth','CheckLevel:1,0']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::get('/post/trash', 'PostController@show_trash')->name('post.show_trash');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/tag', 'TagController');
    Route::resource('/post', 'PostController');
});