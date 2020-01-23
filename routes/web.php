<?php

/* */

Route::view('/','welcome');
Route::view('/contact','contact');
Route::view('/about','about');
Route::get('/customers','CustomersController@list');
