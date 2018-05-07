<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list mood, comments ecc..
Route::get('comments', 'CommentController@index');
Route::get('media', 'MediaController@index');
Route::get('mood', 'MoodController@index');
Route::get('user', 'UserController@index');

//list single mood, comments ecc..
Route::get('comments/{id}', 'CommentController@show');
Route::get('media/{id}', 'MediaController@show');
Route::get('mood/{id}', 'MoodController@show');
Route::get('user/{id}', 'UserController@show');

//create new media...
Route::post('comments', 'CommentController@store');
Route::post('media', 'MediaController@store');
Route::post('mood', 'MoodController@store');
Route::post('user', 'UserController@store');

// update media...
Route::put('comments', 'CommentController@store');
Route::put('media', 'MediaController@store');
Route::put('mood', 'MoodController@store');
Route::put('user', 'UserController@store');

//destroy media...
Route::delete('comments/{id}', 'CommentController@destroy');
Route::delete('media/{id}', 'MediaController@destroy');
Route::delete('mood/{id}', 'MoodController@destroy');
Route::delete('user/{id}', 'UserController@destroy');

