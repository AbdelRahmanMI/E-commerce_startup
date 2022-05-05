@extends('layouts.admin')


@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Add Product</h4>
        </div>

        <div class="card-body">
            
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name ="category_id" aria-label="Select a Category">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Brief Description</label>
                        <input type="text" class="form-control" name="small_description">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="quantity">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-12">
                        <label for="formFile" class="form-label">Select Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class='btn btn-primary'>Submit</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
@endsection