<!-- resources/views/products/show.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <h4>${{ $product->price }}</h4>
                <button class="btn btn-primary add-to-cart-btn" data-id="{{ $product->id }}">Add to Cart</button>
            </div>
        </div>
    </div>
@endsection
