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


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'PostsController@create');
Route::post('/store', 'PostsController@store');
Route::get('/dashboard', 'PostsController@index');


//Route::resource('create', 'PostsController');
//Route::resource('dashboard', 'PostsController');

