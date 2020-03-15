@extends('layouts.app')

@section('content')


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-6 col-xs-12">
            <img height="350px" src="{{ asset('books/' . $book->image) }}" alt="{{ $book->title }}">
        </div>
        <div class="col-lg-6 col-xl-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Book Name: {{ $book->title }}</h5>
                    <p class="text-center">
                        Cover Text: {{ $book->cover_text }}
                    </p>
                    @if($book->description)
                    <p class="card-text text-muted"> {{ $book->description->description }} </p>
                    <a href="/description/edit/{{ $book->description->id }}" class="btn btn-warning">Edit Description</a>
                    @else
                    <form action="/create/description/{{ $book->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Add Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>

                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection