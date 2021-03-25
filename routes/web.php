<?php

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

//Home
Route::get('/', 'HomeController@show')->name('home');

//Constructor
Route::get('/constructor', 'ConstructorController@show')->name('constructor');

//Order
Route::get('/constructor/order', 'ConstructorController@order')->name('order');

//Success
Route::get('/constructor/success', 'ConstructorController@success')->name('success');

//FAQ
Route::get('/faq', 'FaqController@show')->name('faq');

//Send contact
Route::match(['post', 'get'], '/contact/send', 'ContactController@check')->name('contact-send');
