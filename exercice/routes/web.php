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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/post', 'PostController@index')->name('post');
Route::get('/post/add', 'PostController@create')->name('post-add');
Route::post('/post/add', 'PostController@store')->name('post-store');
Route::get('/post/edit/{post}', 'PostController@edit')->name('post-edit');
Route::post('/post/edit/{post}', 'PostController@update')->name('post-update');
Route::get('/post/delete/{post}', 'PostController@destroy')->name('post-delete');

Route::view('/planning', 'planning');
