@extends('layouts.frontend')

@section('content')
    <br>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 boarder-right">
                        <img src="{{ asset('assets/uploads/product/'.$product->image) }}" class="w-100" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $product->name }}
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Hot Deal</label>
                        </h2>
                        <hr>
                        <label class="fw-bold text-danger">Price : {{ $product->price }} $</label>
                        <p class="mt-3">
                            {!! $product->small_description !!}
                        </p>
                        <p class="mt-3">
                            {!! $product->description !!}
                        </p>
                        <hr>
                        @if($product->quantity >0)
                            <label  class="badge bg-success">In Stock</label>
                        @else
                            <label  class="badge bg-danger">Out Of Stock</label>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection