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

Route::get('/user','App\Http\Controllers\todolist@user');
Route::post('/createuser','App\Http\Controllers\todolist@createuser');

Route::get('/','App\Http\Controllers\todolist@index');

Route::get('/activity','App\Http\Controllers\todolist@activityget');

Route::post('/todolist','App\Http\Controllers\todolist@activitytodolist');


Route::get('/edit/{id}','App\Http\Controllers\todolist@editpage');
Route::get('/delete/{id}','App\Http\Controllers\todolist@delete');
Route::post('/editactivity','App\Http\Controllers\todolist@editspecific');