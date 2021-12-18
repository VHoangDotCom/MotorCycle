<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

//front end trang chu
Route::prefix('')->group(function () {

    Route::get('/', [\App\Http\Controllers\homeController::class,'index'])->name('/');
    Route::get('/news', [\App\Http\Controllers\homeController::class,'news'])->name('news');
    Route::get('/products', [\App\Http\Controllers\homeController::class,'Products'])->name('products');

});
//Cart
Route::prefix('')->group(function () {

    Route::get('cart', [\App\Http\Controllers\cartController::class, 'Cart'])->name('Cart');
    Route::get('add-to-cart/{id}', [\App\Http\Controllers\cartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/update-cart',[\App\Http\Controllers\cartController::class,'updateCart'])->name('updateCart');
    Route::get('/delete-cart',[\App\Http\Controllers\cartController::class,'deleteCart'])->name('deleteCart');
});

//checkout
Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/checkout',[\App\Http\Controllers\checkOutController::class,'index'])->name('checkout');
    Route::post('/bill/{id} ',[\App\Http\Controllers\checkOutController::class,'checkout'])->name('order');
});

//dashboard admin
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\dashboardController::class,'index'])->name('home');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('create');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

//category
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('categories', \App\Http\Controllers\categoryController::class);
});
//product people
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('productPeople', \App\Http\Controllers\productController::class);
});

//product moto
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('productMoto', \App\Http\Controllers\productMotoController::class);
});

////Redirect to the Blog Resource Controller
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('blogs', \App\Http\Controllers\BlogController::class);
});

// Redirect to Profile
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('profile', \App\Http\Controllers\profileController::class);
});
//admin user
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('users', \App\Http\Controllers\adminUserController::class);
});
