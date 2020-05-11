<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductController@shop')->name('shop');
Route::get('/cart', 'ProductController@cart')->name('cart.index');
Route::post('/add', 'ProductController@add')->name('cart.store');
Route::post('/update', 'ProductController@update')->name('cart.update');
Route::post('/remove', 'ProductController@remove')->name('cart.remove');
Route::post('/clear', 'ProductController@clear')->name('cart.clear');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

