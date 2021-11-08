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

// Redirect to home
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');


// Redirect to Profile
Route::get('/Admin Profile',function (){
    return redirect('profile');
});
Route::resource('profile',\App\Http\Controllers\profileController::class);

Route::get('/Admin Profile', function () {
    return view('profile.index');
})->name('profile.index');


//Redirect to Category
Route::get('/categories',function (){
    return redirect('/category');
});
Route::resource('category',\App\Http\Controllers\categoryController::class);

//Redirect to Error
Route::get('/error', function () {
    return view('error.500');
})->name('error.500');

//Redirect to FAQ page
Route::get('/login', function () {
    return view('login.faq');
})->name('login.faq');

//TH trang admin trong views
Route::get('/admin', function () {
    return view('admin.profile');
})->name('admin');



