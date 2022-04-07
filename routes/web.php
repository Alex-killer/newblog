<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Blog'], function (){
    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::get('/posts/{post}', 'PostController@show')->name('post.show');

});

Route::group(['namespace' => 'Blog\Admin', 'prefix' => 'admin'], function (){
    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/posts', 'PostController@index')->name('admin.post.index');
    Route::get('/admin/posts/{post}', 'PostController@show')->name('admin.post.show');
    Route::get('/posts/create', 'PostController@create')->name('admin.post.create');

});
