@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class=" mb-3">
        <a href="/create/book" class="btn btn-primary">Add a Book</a>
        <a href="/create/book" class="btn btn-secondary">New books</a>
    </div>
</div>
<div class="container mt-3">
    <div class="row justify-content-center">
        @foreach($books as $book)
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card mb-3">
                <img src="{{ $book->image }}" height="250px" alt="{{ $book->title }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->cover_text }}</p>
                    <a href="/book/{{ $book->id }}" class="btn btn-primary">Read more</a>
                    <a href="/book/{{ $book->id }}" class="btn btn-warning">Edit</a>
                    <form action="/delete/{{ $book->id }}" method="POST" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection