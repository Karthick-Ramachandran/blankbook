<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all(); // select * from books
        return view('books.books')->with('books', $books);
    }

    public function show($id)
    {
        return view('books.book')->with('id', $id);
    }

    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->cover_text = $request->cover_text;
        $book->image = $request->image;
        $book->author = $request->author;
        $book->save();
        return redirect('/');
    }
}
