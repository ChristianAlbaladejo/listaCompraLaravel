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

Route::get('/', 'HomeController@getHome');



Route::get('/productos',  'ProductoController@getIndex');

Route::get('/productos/show/{id}', 'ProductoController@getShow')->middleware('auth');

Route::get('productos/create', 'ProductoController@getCreate')->middleware('auth');
Route::post('productos/create', 'ProductoController@postCreate')->middleware('auth');

Route::get('productos/edit/{id}', 'ProductoController@getEdit')->where('id', '[0-9]+')->middleware('auth');
Route::put('productos/edit', 'ProductoController@putEdit')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
