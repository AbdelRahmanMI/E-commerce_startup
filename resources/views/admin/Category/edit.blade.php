@extends('layouts.admin')


@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Edit Category</h4>
        </div>

        <div class="card-body">
            
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="{{ $category->slug }}" name="slug">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5"  class="form-control">{{ $category->description }}"</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $category->status ? 'checked':'' }} name="status">
                    </div>
                    @if ($category->image)
                    <img src="{{ asset('assets/uploads/category/'. $category->image ) }}" alt="Image Here" class="w-20 border-radius-lg shadow-sm">
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