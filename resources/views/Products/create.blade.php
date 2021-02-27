@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5">Create product</h1>
    <br>
    <form method="POST" class="need-validations" action="/product" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="container">
            <div class="row">

                <div class="col-6">

                    <label> <strong> Product name</strong></label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $message }}</b>
                        </span>
                    @enderror

                    <br> <!-- Price start -->
                    <!-- adding product price -->

                    <label><strong> Product price</strong></label>
                    <input type="text" id="price" name="price" class="form-control @error('value') is-invalid @enderror"
                        value="{{ old('price') }}" />

                    @error('value')
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $message }}</b>
                        </span>
                    @enderror

                    <br><!-- adding product status -->

                    <label><strong> Product status</strong></label>
                    <select id="status" name="status" class="form-control">
                        <option value="Active"> Active </option>
                        <option value="Inactive"> Inactive </option>
                    </select>
                    @error('value')
                        <span class="invalid-feedback" role="alert">
                            <b>{{ $message }}</b>
                        </span>
                    @enderror

                </div><!-- col -->

                <div class="col-6">

                    <br> <!-- Product Image-->
                    <img id="pImage" src="#" width="400">
                    <input type="file" name="productImage" class="form-control" onchange="loadFile(event)">
                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('pImage');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };

                    </script>
                    <br>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- container -->

        <br>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- adding product description -->
                    <label><strong> Product description</strong></label>
                    <textarea id="description" name="description"
                        class="form-control @error('description') is-invalid @enderror"
                        value="{{ old('description') }}"> </textarea>

                    @error('description')
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
