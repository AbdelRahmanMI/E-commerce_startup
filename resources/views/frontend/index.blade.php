@extends('layouts.frontend')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h4>All Products</h4>
                @foreach ($product as $item)
                    
                    <div class="col-md-3 mt-3">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/product/'.$item->image) }}" alt="Product image">
                            <div class="card-body">
                                <h5>{{ $item->name }}</h5>
                                <small>{{ $item->small_description }}</small>
                                <br>
                                <strong class="text-danger">{{ $item->price }}$</strong>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection