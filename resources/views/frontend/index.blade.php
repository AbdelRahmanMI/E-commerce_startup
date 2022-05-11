@extends('layouts.frontend')

@section('content')
{{--     
    <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
        <a class="nav-link active" href="/">All Products</a>
        </li>
        @foreach ($category as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('view-category/'.$item->slug) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul> --}}


    {{--     
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
    </div> --}}

    
    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Products</button>
        </li>
        @foreach ($category as $item)
            <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-{{ $item->name }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $item->name }}" type="button" role="tab" aria-controls="pills-{{ $item->name }}" aria-selected="false">{{ $item->name }}</button>
            </li>
        @endforeach
      </ul>
      <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
            </div>

            @foreach ($category as $item)
                <div class="tab-pane fade" id="pills-{{ $item->name }}" role="tabpanel" aria-labelledby="pills-{{ $item->name }}-tab">
                    <div class="py-5">
                        <div class="container">
                            <div class="row">
                                <h4>{{ $item->name }}</h4>
                                @foreach ($product as $productItem)
                                    @if ($productItem->category->name == $item->name)
                                        <div class="col-md-3 mt-3">
                                            <a href="{{ url('category/'.$productItem->category->slug.'/'.$productItem->name) }}">
                                                <div class="card">
                                                    <img src="{{ asset('assets/uploads/product/'.$productItem->image) }}" alt="Product image">
                                                    <div class="card-body">
                                                        <h5>{{ $productItem->name }}</h5>
                                                        <small>{{ $productItem->small_description }}</small>
                                                        <br>
                                                        <strong class="text-danger">{{ $productItem->price }}$</strong>
                                                    </div>
                                                    
                                                </div>
                                            </a>    
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>

@endsection