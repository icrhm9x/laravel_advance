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

Route::group(['namespace' => 'Client'], function () {

    Route::get('', 'HomeController@index');
    Route::get('about', 'HomeController@about');
    Route::get('contact', 'HomeController@contact');

    Route::group(['prefix' => 'cart'], function () {
        Route::get('', 'CartController@index');
        Route::get('checkout', 'CartController@checkout');
        Route::get('complete', 'CartController@complete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'ProductController@index');
        Route::get('{category}', 'ProductController@index');
        Route::get('{category}/{product}', 'ProductController@detail');
    });
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {

    Route::get('', 'DashboardController');
    
    Route::resource('categories', 'CategoryController');


    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');

    Route::group(['prefix' => 'orders'], function () {
        Route::get('', 'OrderController@index');
        Route::get('processed', 'OrderController@processed');
        Route::get('{order}/edit', 'OrderController@edit');
        Route::put('{order}', 'OrderController@update');
    });

    Route::resource('products', 'ProductController');


    Route::resource('users', 'UserController');

});