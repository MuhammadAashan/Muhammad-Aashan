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

// route to display product cards
Route::get('/','App\Http\Controllers\ProductController@index');


Route::group(['prefix' => 'products'], function () {
    // Route to display product cards
    Route::get('/', 'App\Http\Controllers\ProductController@displayProduct');

    // Route to display add product form
    Route::get('/add', 'App\Http\Controllers\ProductController@create');

    // Route to display product
    Route::get('/list', 'App\Http\Controllers\ProductController@displayProduct');

    // Route to store product in the database
    Route::post('/store', 'App\Http\Controllers\ProductController@store');
    Route::get('/store', 'App\Http\Controllers\ProductController@displayProduct');

    // Route to delete specific product from the database
    Route::delete('/{id}', 'App\Http\Controllers\ProductController@destroy');

    // Route to show edit product form
    Route::get('/edit/{id}', 'App\Http\Controllers\ProductController@edit');

    // Route to update product detail
    Route::put('/{id}', 'App\Http\Controllers\ProductController@update');
});
