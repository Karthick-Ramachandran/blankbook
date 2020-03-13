<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BooksController@index');

Route::get('/book/{id}', 'BooksController@show');

Route::get('/create/book', 'BooksController@create');

Route::post('/create/book', 'BooksController@store');

Route::get('/book/{id}', 'BooksController@edit');

// Route::post('/book/{id}', 'BooksController@update')->name('editbook');
// method overriding


Route::put('/book/{id}', 'BooksController@update')->name('editbook');
// method spoofing


// Route::post('/delete/{id}', 'BooksController@destroy')->name('deletebook');

Route::delete('/delete/{id}', 'BooksController@destroy')->name('deletebook');
