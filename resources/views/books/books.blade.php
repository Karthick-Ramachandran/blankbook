@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="float-right mb-3">
        <a href="/create/book" class="btn btn-primary">Add a Book</a>
        <a href="/create/book" class="btn btn-secondary">New books</a>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach($books as $book)
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card mb-3">
                <img src="{{ $book->image }}" alt="{{ $book->title }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->cover_text }}</p>
                    <a href="/book/{{ $book->id }}" class="btn btn-primary">Read more</a>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection