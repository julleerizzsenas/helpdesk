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

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();


Route::get('dashboard', 'PostsController@index')->name('dashboard');
Route::get('create', 'PostsController@create');
Route::post('store', 'PostsController@store');
Route::post('posts/{post}/comments', 'CommentsController@store');
Route::post('posts/{post}/comments/replies', 'ReplyController@store');


Route::resource('posts', 'PostsController');
Route::resource('posts/{id}', 'PostsController');





