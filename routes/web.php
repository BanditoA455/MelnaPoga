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

Route::get('lang/{locale}','LanguageController');

//CART
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::post('cart/{id}/store', 'CartController@store')->name('cart.store')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::post('/cart/{id}/destroy', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::post('/cart', 'OrderedProductsController@store')->name('order.store')->middleware('auth');

//USERS PAGE
Route::get('/profile', 'Admin\UserController@profile')->name('profile.index')->middleware('auth');
Route::post('/profile', 'Admin\UserController@avatar')->name('profile.avatar')->middleware('auth');


//NAV BAR
Route::get('/about', function () {
    return view('about');
});
Route::get('/support', function () {
    return view('support');
});

//REVIEWS
Route::get('reviews/{id}', 'ReviewsController@index')->name('reviews.index');
Route::get('reviews/{id}/create', 'ReviewsController@create')->name('reviews.create')->middleware('auth');
Route::post('reviews/{id}/create', 'ReviewsController@store')->name('reviews.store')->middleware('auth');
Route::delete('reviews/{id}/destroy', 'ReviewsController@destroy')->name('reviews.destroy')->middleware('auth');
Route::get('reviews/{id}/edit', 'ReviewsController@edit')->name('reviews.edit')->middleware('auth');
Route::put('reviews/{id}/update', 'ReviewsController@update')->name('reviews.update')->middleware('auth');

//HOME
Route::post('products','ProductsController@filter');
Route::get('/','ProductsController@display')->name('home');

//AUTHENTICATION    AUTHENTICATION    AUTHENTICATION    AUTHENTICATION
Auth::routes();
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store', 'destroy', 'update'] ])->middleware('can:manage-users');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
});

