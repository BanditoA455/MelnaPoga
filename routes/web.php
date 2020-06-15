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

// navbar links
// Route::get('/', function () {
//     return view('home');
// });



//Route::resource('/', 'ProductsController');
Route::get('/cart/{id}', 'OrderedProductsController@index')->name('cart');

Route::get('/about', function () {
    return view('about');
});
Route::get('/support', function () {
    return view('support');
});

//Route::get('reviews','ReviewsController@index')->name('reviews');
//Route::resource('reviews', 'ReviewsController', ['except' => ['index', 'create']]);
//Route::resource('reviews', 'ReviewsController');
Route::get('reviews/{id}', 'ReviewsController@index')->name('reviews.index');
Route::get('reviews/{id}/create', 'ReviewsController@create')->name('reviews.create');
Route::post('reviews/{id}/create', 'ReviewsController@store')->name('reviews.store');
// Route::get('reviews/{id}', 'ReviewsController@index')->name('reviews.index');
// Route::get('reviews/{id}/create', 'ReviewsController@create')->name('reviews.create');
//Route::resource('reviews', 'ReviewsController');


//Route::resource('reviews', 'ReviewsController', ['except' => ['index', 'create']]);

//Route::get('reviews/{id}', 'ReviewsController@index')->name('reviews.index');
//Route::get('reviews/{id}/create', 'ReviewsController@create')->name('reviews.create');

Route::get('products','ProductsController@filter');
Route::get('/','ProductsController@display')->name('home');

//AUTHENTICATION    AUTHENTICATION    AUTHENTICATION    AUTHENTICATION
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store'] ]);
});
