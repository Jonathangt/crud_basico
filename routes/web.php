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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/provincias', 'ProvinciaController@index')->name('provincias');
Route::get('/ciudades', 'CiudadController@index')->name('ciudades');

Route::get('/compras', 'HistorialCompraController@index')->name('compras');
Route::post('/store-compra', 'HistorialCompraController@store')->name('store-compra');


Route::get('/user', 'UserController@index')->name('user');
Route::put('/edit-user', 'UserController@update')->name('edit-user');
Route::delete('/delete-user', 'UserController@delete')->name('delete-user');


