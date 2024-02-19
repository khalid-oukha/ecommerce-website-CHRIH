<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'auth'], function () {
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/products/{id}', [ProductController::class,'showProduct'])->name('show.product');
