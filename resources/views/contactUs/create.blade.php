@extends('layouts.app')
@section('content')

    <h1>A ingresado al create de contactenos</h1>

    <form method="POST" class="needs-validations" action="/contact" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="form-row mt-4 row">
            <div class="col-12 col-sm-4 col-md-4">
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror "
                    value="{{ old('name') }}" />

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <b>{{ $message }}</b>
                    </span>
                @enderror
            </div>
            <div class="col-12 col-sm-4 col-md-4">
                <label>E-mail</label>
                <input type="text" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}" />

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <b>{{ $message }}</b>
                    </span>
                @enderror
            </div>


            <div class="col-12 col-sm-4 col-md-4">
                <label>Phone</label>
                <input type="text" id="phone" name="phone"
                    class="form-control @error('phone') is-invalid @enderror " value="{{ old('phone') }}" />

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <b>{{ $message }}</b>
                    </span>
                @enderror
            </div>

            <div class="col-12">
                <label>Message</label>
                <textarea name="message" id="message"
                    class="form-control @error('message') is-invalid @enderror "></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <b>{{ $message }}</b>
                    </span>
                @enderror
            </div>

        </div>
        <div>

            <div class="form-row mt-4 row mt-5">
                <div class="col-12 text-center">
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>

    </form>
@endsection
