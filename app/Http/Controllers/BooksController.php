<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return 'Welcome';
    }

    public function greet($name)
    {
        return "My name is" . " " . $name;
    }
    public function view($name)
    {
        return view('test')->with('name', $name);
    }
}
