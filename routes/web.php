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

Auth::routes();

Route::get('/','HomeController@index')->name('admin.home');

Route::get('/create_product','ProductController@create_product')->name('admin.invoice.create_product');#Create Products

Route::get('/create_order','OrderController@create_orders')->name('admin.invoice.create_orders');#Create Orders
Route::get('/view_order','OrderController@view_order')->name('admin.invoice.view_order');#View Orders
