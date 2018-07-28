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

Route::get('/', 'PostsController@index');

Route::post('favorite/{post}', 'PostsController@favoritePost');
Route::post('unfavorite/{post}', 'PostsController@unFavoritePost');
Route::post('like/{post}', 'PostsController@likePost');
Route::post('unlike/{post}', 'PostsController@unLikePost');

Route::get('my_favorites', 'UsersController@myFavorites')->middleware('auth');
