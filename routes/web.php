<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', 'BooksController@index');


Route::get('/book/{id}', 'BooksController@show');
