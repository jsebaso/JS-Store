@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <div class="card mb-3" style="width: 50rem;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ url(Storage::url($product->image)) }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">
                        <small class="text-muted">last edit</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $product->value }}</li>
                    <li class="list-group-item">{{ $product->status }}</li>
                </ul>
            </div>
        </div>
    </div>
    <a href="/product" class="btn btn-info">
        <strong>Return</strong>
    </a>

@endsection
