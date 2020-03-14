@extends('layouts.app')

@section('content')

{{ $book->title }} <br />

{{ $book->description->description }}

@endsection