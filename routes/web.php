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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trangchu', 'PageController@getIndex');
Route::get('/trangchu/fetch_data', 'PageController@fetch_data');
Route::get('/loaisanpham', 'PageController@getLoaiSp');
Route::get('/chitietsanpham', 'PageController@getChiTietSp');
Route::get('/contact', 'PageController@contact');
Route::get('/themgiohang/{id}', 'PageController@AddToCart')->name('themgiohang');
Route::get('/giohang', 'ProductController@giohang')->name('giohang');
Route::get('/themvaogiohang', 'CartController@themvaogiohang')->name('themvaogiohang');
