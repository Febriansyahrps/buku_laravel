<?php


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