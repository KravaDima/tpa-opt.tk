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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PostController@index');
Route::get('/', ['as' => 'main', 'uses' => 'IndexController@index']);
Route::get('auth', ['as' => 'auth', 'uses' => 'AuthController@index']);
Route::post('leed/create', ['as' => 'leed.create', 'uses' => 'LeedController@create']);
Route::post('leed/store', ['as' => 'leed.store', 'uses' => 'LeedController@store']);
Route::get('leed/mail', ['as' => 'leed.mail', 'uses' => 'LeedController@mail']);