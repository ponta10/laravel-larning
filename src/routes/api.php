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


header('Access-Control-Allow-Origin:http://localhost:3002');
header('Access-Control-Allow-Headers', 'X-Requested-With, X-HTTP-Method-Override, Content-Type, Accept');
header("Access-Control-Allow-Methods: PUT, DELETE, PATCH");


Route::prefix('todo')->group(function () {
    Route::get('/','TodoController@index');
    Route::post('/create', 'TodoController@create');
    Route::get('/show/{id}', 'TodoController@show');
    Route::post('/sort', 'TodoController@sort');
    Route::delete('/delete/{id}', 'TodoController@delete');
    Route::put('/update/{id}', 'TodoController@update');
    Route::put('/status/{id}', 'TodoController@status');
    Route::get('/tag/{id}', 'TodoController@tag');
});

Route::prefix('tag')->group(function () {
    Route::get('/','TagController@index');
    Route::get('/todo/{id}','TagController@todo');
    Route::post('/create','TagController@create');
});