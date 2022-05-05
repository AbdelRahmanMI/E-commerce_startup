@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header"><h1>Product page</h1></div>


        <div class="card-body">
            <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brief Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ( $product as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->small_description }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td><img src="{{ asset('assets/uploads/product/'. $item->image ) }}" alt="Image Here" class="w-20 border-radius-lg shadow-sm"></td>
                        <td>
                            <a href={{ url('edit-product/'.$item->id) }} class = "btn btn-primary">Edit</a>
                            <a href= {{ url('delete-product/'.$item->id) }} class = "btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection