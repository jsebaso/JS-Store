@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5">Edit Category</h1>
    <br>
    <form method="POST" class="need-validations" action="/category/{{ $category->id }}" enctype="multipart/form-data"
        novalidate>
        {{ csrf_field() }}
        @csrf
        @method('put')

        <div class="container">
            <div class="row">

                <div class="col-6">

                    <label> <strong> Category name</strong></label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $category->name }}" />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $message }}</b>
                        </span>
                    @enderror
                    <br>
                    <button class="btn btn-info"> <strong>Send</strong></button>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- container -->


    </form>

@endsection
