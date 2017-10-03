<?php


Route::get('/','admincontroller@getHome')->name('getHome');
Route::get('entry','admincontroller@getEntry')->name('getEntry');
Route::post('/postentry','admincontroller@postEntry')->name('postEntry');
Route::get('/admin','admincontroller@getAdmin')->name('getAdmin');