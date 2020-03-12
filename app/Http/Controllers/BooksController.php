<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all(); // select * from books
        return response()->json($books);
    }

    public function show($id)
    {
        return view('books.book')->with('id', $id);
    }
}
