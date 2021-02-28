<!-- matriz de productos -->
@extends('layouts.app')
@section('content')
    <a href="/category/create">create category</a>
    
    <div>
        <h1 class="text-center mt-3">category list</h1>
        <table class="table table-bordered">
            <thread>
                <th scope="col">category name</th>
                <th scope="col"></th>
            </thread>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/category/{{ $category->id}}/edit"> edit </a>
                        <form class="d-inline" action="{{route('category.destroy', $category ->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <strong>Delete</strong>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    {{-- <div>
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
                                                <?php
                                                $product = $products[$productCount];
                                                ?>
                                                <img src="{{ url(Storage::url($product->image)) }}" class="card-img-top" width="100" height="300">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->name }}</h5>
                                                    <p>
                                                        <strong>Price: ${{ number_format($product->price) }}</strong>
                                                    </p>
                                                    <a href="/product/{{ $product->id }}" class="btn btn-info">
                                                        <strong>Details</strong>
                                                    </a>
                                                    <a href="/product/{{ $product->id }}/edit" class="btn btn-info">
                                                        <strong>Edit</strong>
                                                    </a>
                                                    <form class="d-inline" action="{{route('product.destroy', $product ->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <strong>Delete</strong>
                                                        </button>
                                                    </form>
                                                </div> 
                                            </div>
                                        </div> @endif <?php $productCount++; ?> @endfor
                </div><!-- col -->
            @endfor
        </div>
    </div> --}}
@endsection
