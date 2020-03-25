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

Route::get('/', 'HomeController@index')->name('home');

// Controls for logged in users.
Route::get('/home', 'EquipmentController@index')->middleware('auth');
Route::get('/home/{category}', 'EquipmentController@showCategory')->middleware('auth');
Route::get('/home/product/{id}', 'EquipmentController@showProduct')->middleware('auth');

// Controls for admin.
Route::resource('/admin/product', 'AdminEquipmentController')->middleware('role');
Route::resource('/admin/category', 'AdminCategoryController')->middleware('role');


