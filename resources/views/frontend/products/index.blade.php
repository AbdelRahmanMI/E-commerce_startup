@extends('layouts.frontend')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h4>{{ $category->name }}</h4>
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