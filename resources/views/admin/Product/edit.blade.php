@extends('layouts.admin')


@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Edit Product</h4>
        </div>

        <div class="card-body">
            
            <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name ="category_id" aria-label="Select a Category">
                            <option value="">{{ $product->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Brief Description</label>
                        <input type="text" class="form-control" name="small_description"value="{{ $product->small_description }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5" class="form-control">{{ $product->description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="number" class="form-control" value="{{ $product->price }}"name="price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control"value="{{ $product->quantity }}" name="quantity">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $product->status ? 'checked':'' }}>
                    </div>

                    @if ($product->image)
                    <img src="{{ asset('assets/uploads/product/'. $product->image ) }}" alt="Image Here" class="w-20 border-radius-lg shadow-sm">
                    @endif
                    <div class="col-md-12">
                        <label for="formFile" class="form-label">Select Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class='btn btn-primary'>Edit</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
@endsection