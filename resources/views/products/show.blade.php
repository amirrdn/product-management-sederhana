@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title">{{ $product->name }}</h1>
                    <p class="card-subtitle text-muted">{{ $product->category }}</p>
                    <h2 class="text-primary mt-3">${{ $product->price }}</h2>
                    <p class="mt-3">{{ $product->description }}</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    <p><strong>Added on:</strong> {{ $product->created_at->format('d M Y') }}</p>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection