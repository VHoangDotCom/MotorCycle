<?php

use Illuminate\Support\Facades\Route;

// Redirect to home

Route::get('/', function () {
    return view('login.login');
});
Route::resource('login', \App\Http\Controllers\loginController::class);
Route::post('/', [App\Http\Controllers\loginController::class, 'checkLoginAdmin'])->name('login.checkLoginAdmin');

Route::resource('home', \App\Http\Controllers\BlogController::class);

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

// Redirect To Home Page
Route::get('/homePage', function () {
    return view('trang-chu.home');
})->name('trang-chu.home');


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
Route::get('/people Cart', function () {
    return redirect('productPeople');
});
Route::resource('productPeople', \App\Http\Controllers\productController::class);

Route::post('/productPeople/create', [App\Http\Controllers\productController::class, 'store']);
Route::get('/productPeople/show/{id}', [App\Http\Controllers\productController::class, 'show']);
Route::get('/productPeople/edit/{id}', [App\Http\Controllers\productController::class, 'edit']);
Route::post('/productPeople/update/{id}', [App\Http\Controllers\productController::class, 'update']);
Route::post('/productPeople/destroy/{id}', [App\Http\Controllers\productController::class, 'destroy']);
Route::get('/people of Cart', function () {
    return redirect('productPeople.edit');
})->name('productPeople.edit');


//Redirect to Product Moto
Route::get('/moto Cart', function () {
    return redirect('productMoto');
});
Route::resource('productMoto', \App\Http\Controllers\productMotoController::class);

Route::post('/productMoto/create', [App\Http\Controllers\productMotoController::class, 'store']);
Route::get('/productMoto/show/{id}', [App\Http\Controllers\productMotoController::class, 'show']);
Route::get('/productMoto/edit/{id}', [App\Http\Controllers\productMotoController::class, 'edit']);
Route::post('/productMoto/update/{id}', [App\Http\Controllers\productMotoController::class, 'update']);
Route::post('/productMoto/destroy/{id}', [App\Http\Controllers\productMotoController::class, 'destroy']);


Route::get('/moto of Cart', function () {
    return redirect('productMoto.edit');
})->name('productMoto.edit');


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
//Login demo
Route::get('/loginDemo', function () {
    return view('login.login');
})->name('login.login');



Route::get('blogs/word-export/{id}', 'App\Http\Controllers\BlogController@wordExport');


////Redirect to the Blog Resource Controller
Route::get('/blogs', function () {
    return redirect('blogs');
});
Route::resource('blogs', \App\Http\Controllers\BlogController::class);


Route::get('/',[\App\Http\Controllers\BlogController::class,'home'])->name('home');
Route::get('homePage',[\App\Http\Controllers\productController::class,'home'])->name('trang-chu.home');

Route::get('/products',[App\Http\Controllers\productIndexController::class, 'index']);
//add to cart
Route::get('/products/add-to-cart/{id}',[\App\Http\Controllers\productIndexController::class,'addToCart'])->name('addToCart');
Route::get('/products/show-cart',[\App\Http\Controllers\productIndexController::class,'showCart'])->name('showCart');
Route::get('/products/update-cart',[\App\Http\Controllers\productIndexController::class,'updateCart'])->name('updateCart');
Route::get('/products/delete-cart',[\App\Http\Controllers\productIndexController::class,'deleteCart'])->name('deleteCart');
