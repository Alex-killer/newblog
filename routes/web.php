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

Route::group(['namespace' => 'Blog'], function (){
    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');

});

Route::group(['namespace' => 'Blog\Admin', 'prefix' => 'admin'], function (){
    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');

});
