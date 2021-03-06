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

//一覧画面
Route::get('index', 'App\Http\Controllers\TaskController@index');

Route::get('create', 'App\Http\Controllers\TaskController@createTask');

Auth::routes();
