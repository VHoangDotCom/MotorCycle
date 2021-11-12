<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;


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
})->name('home');


// Redirect to Profile
Route::get('/Admin Profile',function (){
    return redirect('profile');
});
Route::resource('profile',\App\Http\Controllers\profileController::class);

Route::get('/Admin Profiles', function () {
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

//Redirect to login form
Route::get('/Sign in', function () {
    return view('login.login');
})->name('login.login');



//////Redirect to the News Resource Controller
//Route::get('/',function(){
//   return redirect('/news');
//});
//Route::resource('news',NewsController::class);
//


///Redirect to the Blog Resource Controller
//Route::get('/',function(){
//    return redirect('/blogs');
//});
//Route::resource('blogs',BlogController::class);




