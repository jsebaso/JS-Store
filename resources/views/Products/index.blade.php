<!-- matriz de productos -->
@extends('layouts.app')
@section('content')
<a href="/product/create">create product</a>

<div>
    <h1 class="text-center mt-3">product list</h1>
    <table class="table table-bordered">
        <thread>
            <th scope="col">product name</th>
            <th scope="col">product price</th>
            <th scope="col">product status</th>
            <th scope="col"></th>
        </thread>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->status}}</td>
                <td>
                    <a type="button" class="btn btn-success" href="/product/{{ $product->id}}"> view </a>
                    <a type="button" class="btn btn-primary" href="/product/{{ $product->id}}/edit"> edit </a>
                    <a type="button" class="btn btn-danger"> delete </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- AQUI INICIAN LOS PRODUCTOS-->

<br>
    <div class="container">
        <div class="row">
            <!-- Primera Fila -->
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p><strong>Price: $10.000</strong></p><a href="#" class="btn btn-info"> <strong>Buy!</strong></a>
                    </div>
                </div>
            </div><!-- col -->

            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p><strong>Price: $10.000</strong></p><a href="#" class="btn btn-info"> <strong>Buy!</strong></a>
                    </div>
                </div>
            </div><!-- col -->

            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p><strong>Price: $10.000</strong></p><a href="#" class="btn btn-info"> <strong>Buy!</strong></a> 
                    </div>
                </div>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->

 <!-- AQUI TERMINAN LOS PRODUCTOS-->
@endsection