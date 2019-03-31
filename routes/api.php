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


Route::get('/posts','PostApiController@index');

Route::post('/posts/add','PostApiController@store');
Route::get('/posts/delete/{id}','PostApiController@destroy');
Route::post('/posts/edit/{id}','PostApiController@update');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
