<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

//一覧表示
Route::get('todos', 'TodoController@index');
//登録画面の表示
Route::get('todos/create', 'TodoController@create');
//登録処理
Route::post('todos', 'TodoController@store');
//詳細画面の表示
Route::get('todos/{id}', 'TodoController@show');
//更新画面の表示
Route::get('todos/{id}/edit', 'TodoController@edit');
//更新処理
Route::put('todos/{id}', 'TodoController@update');
//削除処理
Route::delete('todos/{id}', 'TodoController@destroy');