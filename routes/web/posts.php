<?php
use Illuminate\Support\Facades\Route;
Route::get('/post/{post}', 'PostController@show')->name('post');

Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::delete('/post/{post}/destroy', 'PostController@destroy')->name('post.destroy');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit')->middleware('can:view,post');
Route::patch('/post/{post}/update', 'PostController@update')->name('post.update');
