<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MainController;
// Redirect to home

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');

//Redirect to login form
//route::get('/', 'LoginAdminController@getLogin');
//route::post('/', 'LoginAdminController@postLogin');

// Redirect to Profile
    Route::get('/Admin Profile', function () {
        return redirect('profile');
    });
    Route::resource('profile', \App\Http\Controllers\profileController::class);


//Redirect to Category
    Route::get('/categories', function () {
        return redirect('/category');
    });
    Route::resource('category', \App\Http\Controllers\categoryController::class);


//Redirect to Product People
Route::get('/people products', function () {
    return redirect('productPeople');
});
Route::resource('productPeople', \App\Http\Controllers\ProductPeopleController::class);

Route::post('/productPeople/create', [App\Http\Controllers\ProductPeopleController::class, 'store']);
Route::get('/productPeople/show/{id}', [App\Http\Controllers\ProductPeopleController::class, 'show']);
Route::get('/productPeople/update/{id}', [App\Http\Controllers\ProductPeopleController::class, 'edit']);
Route::post('/productPeople/update/{id}', [App\Http\Controllers\ProductPeopleController::class, 'update']);
Route::post('/productPeople/destroy/{id}', [App\Http\Controllers\ProductPeopleController::class, 'destroy']);


Route::get('/people forfd products', function () {
    return redirect('productPeople.edit');
})->name('productPeople.edit');

//Redirect to Product of motors
    Route::get('/products of items', function () {
        return redirect('/productOfItems');
    });
    Route::resource('productOfItems', \App\Http\Controllers\productOfItemController::class);

//Redirect to gallery
    Route::get('/gallery', function () {
        return redirect('/gallery');
    });
    Route::resource('gallery', \App\Http\Controllers\galleryController::class);

//Redirect to Customer
    Route::get('/customers', function () {
        return redirect('/customers');
    });
    Route::resource('customers', \App\Http\Controllers\customerController::class);

//Redirect to Error
    Route::get('/error', function () {
        return view('error.500');
    })->name('error.500');

//Redirect to FAQ page
    Route::get('/login', function () {
        return view('login.faq');
    })->name('login.faq');


    Route::get('blogs/word-export/{id}', 'App\Http\Controllers\BlogController@wordExport');


////Redirect to the Blog Resource Controller
    Route::get('/blogs', function () {
        return redirect('blogs');
    });
    Route::resource('blogs', \App\Http\Controllers\BlogController::class);





