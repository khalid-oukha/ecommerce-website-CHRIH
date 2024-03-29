<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StoreFiltersController;
use App\Http\Controllers\StripController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;








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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginform');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('registerform');
Route::post('/register', [RegisterController::class,'register'])->name('register');

// Password Reset Routes...
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget.passwordform');
Route::post('/password/email', [ForgotPasswordController::class, 'ResetPasswordRequest'])->name('forgetpassword.request');
Route::get('reset/{token}', [ResetPasswordController::class,'reset'])->name('password.reset');
Route::post('/reset', [ResetPasswordController::class,'GetnewPassword'])->name('password.postReset');



Route::group(['middleware' => 'auth'], function () {

    // cart routes
    Route::get('/cart',[CartController::class,'index'])->name('cart.index');
    Route::Post('/addCart', [CartController::class,'addToCART'])->name('cart.add');
    Route::Delete('/remove-product-cart',[CartController::class,'removeProductCart'])->name('product.destroy');
    Route::get('/dashboard', function () { return view('dashboard'); });

});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/products/{id}', [ProductController::class,'showProduct'])->name('show.product');



Route::get('checkout',[StripController::class,'index'])->name('checkout.index');



Route::post('/searchBycategorie', [StoreFiltersController::class, 'filterByCategorie'])->name('searchBycategorie');

Route::post('/session', [PaymentController::class,'checkout']);
Route::get('/success', [PaymentController::class,'success'])->name('checkout.success');
