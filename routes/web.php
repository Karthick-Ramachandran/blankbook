<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// closure
Route::get('/welcome', 'BooksController@index');


Route::get('/welcome/{name}', [
    'uses' => 'BooksController@greet'
]);
