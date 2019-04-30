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
Route::get('/about-us', 'webController@about_us');
Route::get('/contact-us', 'webController@contact_us');	
Route::get('/buku','BukuController@index');
Route::get('/buku/input','BukuController@input');
Route::post('/buku/data','BukuController@data');
Route::get('/buku/hapus/{id}','BukuController@hapus');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');