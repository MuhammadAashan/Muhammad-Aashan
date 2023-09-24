<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\ProductController@index');

Route::get('/add','App\Http\Controllers\ProductController@create');

Route::get('/products','App\Http\Controllers\ProductController@displayProduct');

Route::post('/store','App\Http\Controllers\ProductController@store');
