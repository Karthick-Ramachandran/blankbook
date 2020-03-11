<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// closure
Route::get('/welcome', function () {
    return 'Hello world';
});

// dynamic routes
Route::get('/welcome/{name}', function ($name) {
    return 'My name is' . " " . $name;
});

Route::get('/name', 'BookController@create');

Route::get('/', [
    'use' => 'Controller@index'
]);
