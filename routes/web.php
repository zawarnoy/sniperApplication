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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/order', 'OrderController@index')->name('order');

Route::get('/order/client', 'OrderController@client')->name('order.client');

Route::get('/order/certificate', 'OrderController@certificate')->name('order.certificate');
