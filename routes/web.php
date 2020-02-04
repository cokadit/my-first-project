<?php

/* */

Route::view('/','home');
Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');

// Route::get('/customers','CustomersController@index');
// Route::get('/customers/create','CustomersController@create');
// Route::post('/customers','CustomersController@store');
// Route::get('/customers/{customer}','CustomersController@show');
// Route::get('/customers/{customer}/edit','CustomersController@edit');
// Route::patch('/customers/{customer}','CustomersController@update');
// Route::delete('/customers/{customer}','CustomersController@destroy');

Route::resource('customers','CustomersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
