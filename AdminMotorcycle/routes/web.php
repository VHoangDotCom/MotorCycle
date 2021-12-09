<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//
////===============================================================
////Copy from Sky mArt
//Route::group(
//    ['middleware' => 'locale'],
//    function () {
//        Route::get('change-language/{language}', 'changeLanguageController@changeLanguage')
//            ->name('user.change-language');
//    }
//);
////Route::get('/', 'HomeController@index')->name('home');
//Route::get('/contact', 'HomeController@contact');
//
//
//Auth::routes(
//    [
//        'verify' => false,
//    ]
//);
//
//Route::name('admin.')->prefix('admin')->middleware(['auth', 'can:accessAdmin'])->group(
//    function () {
//        Route::get('dashboard', 'DashboardController@index')->name('index');
//        Route::resource('category', 'CategoryController');
//        Route::resource('banner', 'BannerController');
//        Route::resource('product', 'ProductController');
//        Route::resource('deal', 'DealController');
//        Route::resource('user', 'Auth\UserController');
//        Route::resource('order', 'OrderController');
//        Route::resource('review', 'ReviewController');
//    }
//);
//route::get('product/show/{id}', 'ProductController@show')->name('product.show');
//route::get('product/show-all', 'ProductController@showAll')->name('product.showAll');
//route::get('category/show/{id}', 'CategoryController@show')->name('category.show');
//Route::resource('account', 'Auth\AccountController');
//Route::get('account/{id}/changePass', 'Auth\AccountController@changePass')->name('account.changePass');
//Route::post('account/{id}/updatePass', 'Auth\AccountController@updatePass')->name('account.updatePass');
//Route::post('add-cart', 'CartController@save_cart')->name('addCart');
//Route::get('/search', 'HomeController@search');
//Route::get('show-cart', 'CartController@show_cart')->name('showCart');
//Route::post('update-qty-cart{id}', 'CartController@update_quantity')->name('updateCart');
//Route::get('delete-cart/{rowId}', 'CartController@delete_cart')->name('deleteCart');
//Route::get('order/create', 'OrderController@create')->name('order.create');
//Route::post('order/store', 'OrderController@store')->name('order.store');
//Route::post('review/store', 'ReviewController@store')->name('review.store');
//Route::get('/filter', 'HomeController@filter');
//Route::get('order/{id}/history', 'OrderController@history')->name('order.history');
//Route::post('order/cancel/{id}', 'OrderController@cancel')->name('order.cancel');
//Route::get('order/history-detail/{id}', 'OrderController@historyDetail')->name('order.history-detail');
//
//Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
//Route::get('/{provider}/callback', 'SocialController@callback');
//
//Route::post('add-wishlist', 'WishlistController@save_wishlist')->name('addWish');
//Route::get('show-wishlist/{id}', 'WishlistController@show_wishlist')->name('showWish');
//Route::post('delete-wishlist/{rowId}', 'WishlistController@delete_wishlist')->name('deleteWish');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
