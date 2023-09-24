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



//route to display add product form
Route::get('/add','App\Http\Controllers\ProductController@create');


//route to display product
Route::get('/products','App\Http\Controllers\ProductController@displayProduct');



// route to store product in the database
Route::post('/store','App\Http\Controllers\ProductController@store');
Route::get('/store','App\Http\Controllers\ProductController@displayProduct');


// route to delete specific product from database
Route::Delete('/delete/{id}','App\Http\Controllers\ProductController@destroy');


// route to show edit product form
Route::get('/edit/{id}', 'App\Http\Controllers\ProductController@edit');


//route to update product detail
Route::put('/update/{id}', 'App\Http\Controllers\ProductController@update');
