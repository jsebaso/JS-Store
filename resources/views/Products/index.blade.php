<!-- matriz de productos -->
@extends('layouts.app')
@section('content')
    <a href="/product/create">create product</a>
    <div>
        <h1 class="text-center mt-3">product list</h1>
        <?php
        $rowNum = ceil(count($products) / 3);
        $productCount = 0;
        ?>
        <div class="container">
            @for ($i = 0; $i < $rowNum; $i++)
                <div class="row">
                    <!-- Primera Fila -->
                    @for ($j = 0; $j < 3; $j++)
                        @if ($productCount < count($products)) <div class="col-4">
                                        <div class="card" style="width: 25rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $products[$productCount]->name }}</h5>
                                                <p>
                                                    <strong>Price: {{ $products[$productCount]->price }}</strong>
                                                </p>
                                                <a href="#" class="btn btn-info">
                                                    <strong>Details</strong>
                                                </a>
                                                <a href="#" class="btn btn-info">
                                                    <strong>Edit</strong>
                                                </a>
                                                <a href="#" class="btn btn-info">
                                                    <strong>Delete</strong>
                                                </a>
                                            </div> 
                                        </div>
                                    </div> @endif <?php $productCount++; ?> @endfor
                </div><!-- col -->
            @endfor
        </div>
    </div>
@endsection
