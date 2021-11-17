<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Admin Profiles', function () {
    return view('profile.index');
})->name('profile.index');


//Redirect to Category
Route::get('/categories',function (){
    return redirect('/category');
});
   Route::resource('category',\App\Http\Controllers\categoryController::class);

//Redirect to Product of people
Route::get('/products of people',function (){
    return redirect('productOfPeople');
});
Route::resource('productOfPeople',\App\Http\Controllers\productOfPeopleController::class);




//Redirect to Product of motors
Route::get('/products of items',function (){
    return redirect('/productOfItems');
});
Route::resource('productOfItems',\App\Http\Controllers\productOfItemController::class);

//Redirect to gallery
Route::get('/gallery',function (){
    return redirect('/gallery');
});
Route::resource('gallery',\App\Http\Controllers\galleryController::class);

//Redirect to Customer
Route::get('/customers',function (){
    return redirect('/customers');
});
Route::resource('customers',\App\Http\Controllers\customerController::class);

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


Route::get('blogs/word-export/{id}', 'App\Http\Controllers\BlogController@wordExport');




////Redirect to the Blog Resource Controller
Route::get('/blogs',function(){
    return redirect('blogs');
});
Route::resource('blogs',\App\Http\Controllers\BlogController::class);




