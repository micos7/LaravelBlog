<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Authentication routes

Route::get('auth/login',['uses'=>'Auth\AuthController@getLogin','as'=>'login']);
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout',['uses'=>'Auth\AuthController@logout','as'=>'logout']);

//Registration routes

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

//Password reset routes

Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');
Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset','Auth\PasswordController@reset');


Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');

Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);

Route::get('/', 'PagesController@getIndex');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::resource('posts','PostController');
