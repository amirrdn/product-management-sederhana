@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New Product</a>
        <form method="GET" action="{{ route('products.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
                <div class="col-md-3">
                    <input type="number" name="min_price" class="form-control" placeholder="Min Price">
                </div>
                <div class="col-md-3">
                    <input type="number" name="max_price" class="form-control" placeholder="Max Price">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Filter</button>
                </div>
            </div>
        </form>
        <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection