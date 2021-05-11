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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'App\Http\Controllers\ProductController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload-feed', 'App\Http\Controllers\ProductController@feed_upload');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/products', 'App\Http\Controllers\DashboardController@products');
Route::get('/events', 'App\Http\Controllers\DashboardController@events');
Route::get('/product_feed', 'App\Http\Controllers\DashboardController@feeds');