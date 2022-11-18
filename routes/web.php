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

Route::get('/admin', 'App\Http\Controllers\Products@admin');
Route::post('/admin', 'App\Http\Controllers\Products@create_product');
Route::delete('/admin/{id}', 'App\Http\Controllers\Products@delete_product');
Route::get('/basket', 'App\Http\Controllers\Products@basket');
Route::get('/categories', 'App\Http\Controllers\Products@categories');
Route::get('/', 'App\Http\Controllers\Products@home');
Route::get('/profile', 'App\Http\Controllers\Products@home');
