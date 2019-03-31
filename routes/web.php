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

// Route::get('/', function () {
//     return view('h/welcome');
// });

Route::get('/','PhotoController@x');
Route::get('/human','HumanController@index');

Route::group(['prefix' =>"student" ], function () {

Route::get('/index','StudentController@index');
Route::get('/add','StudentController@create');
Route::post('/store','StudentController@store');
Route::get('/show/{id}','StudentController@show');
Route::get('/edit/{id}','StudentController@edit');
Route::patch('/update','StudentController@update');
Route::get('/delete/{id}','StudentController@destroy');
});


Route::group(['prefix' =>"posts" ], function () {

    Route::get('/index','PostController@index');
    Route::get('/add','PostController@create');
    Route::post('/store','PostController@store');
    // Route::get('/show/{id}','StudentController@show');
    // Route::get('/edit/{id}','StudentController@edit');
    // Route::patch('/update','StudentController@update');
    // Route::get('/delete/{id}','StudentController@destroy');
    });
    



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
