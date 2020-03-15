@extends('layouts.app')


@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Description</h5>
                    <form action="/edit/description/{{ $des->id }}" class="mt-2" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Edit Description</label>
                            <textarea name="description" class="form-control">
                            {{ $des->description }}
                            </textarea>
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" value="Edit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection