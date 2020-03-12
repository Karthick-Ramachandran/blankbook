<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BooksController@index');





Route::get('/book/{id}', 'BooksController@show');


Route::get('/create/book', 'BooksController@create');
