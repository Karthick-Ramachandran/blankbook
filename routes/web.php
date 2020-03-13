<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BooksController@index');

Route::get('/book/{id}', 'BooksController@show');

Route::get('/create/book', 'BooksController@create');

Route::post('/create/book', 'BooksController@store');

Route::get('/book/{id}', 'BooksController@edit');

Route::post('/book/{id}', 'BooksController@update')->name('editbook');
// method overriding
