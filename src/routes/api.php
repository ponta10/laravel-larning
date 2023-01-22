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

// Route::get('/todo','TodoController@index');
// Route::post('/todo/create', 'TodoController@create');

// Route::middleware(['middleware' => 'api'])->group(function () {
//     # 投稿作成
//     Route::post('/todo/create', 'TodoController@create');
//     # 投稿一覧表示
//     Route::get('/todo', 'TodoController@index');
// });

Route::prefix('todo')->group(function () {
    Route::get('/','TodoController@index');
    Route::post('/create', 'TodoController@create');
    Route::post('/show/{id}', 'TodoController@show');
    Route::delete('/delete/{id}', 'TodoController@delete');
    Route::put('/update/{id}', 'TodoController@update');
});