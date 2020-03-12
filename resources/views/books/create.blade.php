@extends('layouts.app')


@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Cover Text</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection