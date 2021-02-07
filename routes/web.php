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
Route::post('/add_product','ProductController@add_product')->name('admin.invoice.add_product');#add Products
Route::post('/add-product-brand','ProductController@add_product_brand')->name('admin.add_product_brand');#Add Product Brand
Route::post('/change-product-color-setting','ProductController@product_color_setting')->name('admin.product_color_setting');#Product Color Setting

Route::get('/create_order','OrderController@create_orders')->name('admin.invoice.create_orders');#Create Orders
Route::post('/add_order','OrderController@add_order')->name('admin.invoice.add_order');#Add Orders
Route::get('/view_order','OrderController@view_order')->name('admin.invoice.view_order');#View Orders

Route::get('/account-creation','AccountController@add_account_creation')->name('admin.account_creation');#add Account Cretion
