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


Route::resource('/', ('ProductsController'));


Route::get('/about', function () {
    return view('about');
});
Route::get('/support', function () {
    return view('support');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });

Route::get('products','ProductsController@display');
Route::get('/','ProductsController@display');

//AUTHENTICATION    AUTHENTICATION    AUTHENTICATION    AUTHENTICATION
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store'] ]);
});
