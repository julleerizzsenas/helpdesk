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

Route::get('/', 'PostsController@index')->name('home');


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
// Route::get('create', 'PostsController@create');
// Route::post('store', 'PostsController@store');
// Route::get('posts', 'PostsController@show');


Route::resource('posts', 'PostsController');
//Route::resource('show', 'PostsController');
Route::resource('dashboard', 'DashboardController');



