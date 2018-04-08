<?php



Route::get('/','HomeController@index')->name('home');
//Route::get('about','myController@display');

// Registration and Login Routes
Route::get('/register','RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');
