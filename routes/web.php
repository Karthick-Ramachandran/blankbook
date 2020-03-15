<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BooksController@index');

Route::get('/book/{id}', 'BooksController@show');

Route::get('/create/book', 'BooksController@create');

Route::get('/new/books', 'BooksController@new');


Route::post('/create/book', 'BooksController@store');

Route::get('/book/{id}', 'BooksController@edit');

Route::put('/book/{id}', 'BooksController@update')->name('editbook');

Route::delete('/delete/{id}', 'BooksController@destroy')->name('deletebook');


Route::get('/description/{id}', 'DescriptionController@index');


Route::post('/create/description/{id}', 'DescriptionController@store');

Route::get('/description/edit/{id}', 'DescriptionController@edit');

Route::post('/edit/description/{id}', 'DescriptionController@update');
