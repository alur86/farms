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
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');
Route::get('/', 'CatalogController@index')->name('manager');
Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('show/{id}','CatalogController@show')->name('show');
Route::get('show_farm/{id}','CatalogController@show_farm')->name('show_farm');
Route::get('sort','CatalogController@sort')->name('sort');
Route::get('home','ManagerController@index')->name('home');
Route::get('profile','ManagerController@profile')->name('profile');
Route::get('add_farm','ManagerController@add_farm')->name('add_farm');
Route::post('update','ManagerController@update')->name('update');
Route::post('postfarmadd','ManagerController@post_farm')->name('postfarmadd');