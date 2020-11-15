<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Render in view
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);
