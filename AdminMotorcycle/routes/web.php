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
Route::get('/', function () {
    return view('trang-chu.home');
})->name('trang-chu.home');
Route::get('/checkout', function () {
    return view('trang-chu.Cart.checkout');
})->name('trang-chu.Cart.checkout');

Route::resource('home', \App\Http\Controllers\homeController::class);
Route::get('/home',[\App\Http\Controllers\BlogController::class,'home'])->name('home');

//front end dashboard admin
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

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
Route::get('/categories', function () {
    return redirect('category');
});
Route::resource('categories', \App\Http\Controllers\categoryController::class);

//product people
Route::get('/products People', function () {
    return redirect('product.productPeople');
});
Route::resource('productPeople', \App\Http\Controllers\productController::class);


//product moto
Route::get('/products Moto', function () {
    return redirect('product.productPeople');
});
Route::resource('productMoto', \App\Http\Controllers\productMotoController::class);


////Redirect to the Blog Resource Controller
Route::get('/blogs', function () {
    return redirect('blogs');
});
Route::get('/home',[\App\Http\Controllers\BlogController::class,'home'])->name('home');
Route::resource('blogs', \App\Http\Controllers\BlogController::class);


// Redirect to Profile
Route::get('/Admin Profile', function () {
    return redirect('profile');
});
Route::resource('profile', \App\Http\Controllers\profileController::class);


Route::get('/',[\App\Http\Controllers\productController::class,'home'])->name('trang-chu.home');
Route::get('/products',[\App\Http\Controllers\productController::class,'Products'])->name('products');




Route::post('add Cart',[\App\Http\Controllers\cartController::class,'addToCart'])->name('addToCart');
Route::get('/ShoppingCart',function(){
    return view('Cart.ShoppingCart');
});

Route::get('cart', [\App\Http\Controllers\cartController::class, 'Cart'])->name('Cart');
Route::get('add-to-cart/{id}', [\App\Http\Controllers\cartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [\App\Http\Controllers\cartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [\App\Http\Controllers\cartController::class, 'remove'])->name('remove.from.cart');

//Route::get('/cart', function () {
//    return view('cart');
//});
//Route::resource('cart',\App\Http\Controllers\cartController::class);
