@extends('layouts.frontend')

@section('content')
    
    <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
        <a class="nav-link active" href="/">All Products</a>
        </li>
        @foreach ($category as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('view-category/'.$item->slug) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
    
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h4>All Products</h4>
                @foreach ($product as $item)
                    <div class="col-md-3 mt-3">
                        <a href="{{ url('category/'.$item->category->slug.'/'.$item->name) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/product/'.$item->image) }}" alt="Product image">
                                <div class="card-body">
                                    <h5>{{ $item->name }}</h5>
                                    <small>{{ $item->small_description }}</small>
                                    <br>
                                    <strong class="text-danger">{{ $item->price }}$</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection