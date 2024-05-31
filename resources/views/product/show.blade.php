@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="product-image">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow-sm">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    <div>
                        <h3>Описание изделия:</h3>
                    <p class="product-description">{{ $product->description }}</p>
                    </div>
                    <h4 class="product-price">Цена: {{ $product->price }}руб</h4>
                    <button class="btn btn-primary add-to-cart-btn" data-id="{{ $product->id }}">Добавить в корзину</button>
                    <a class="btn btn-secondary" href="{{route("products.index")}}">Назад</a>
                </div>
            </div>
        </div>

    </div>
@endsection

<style>
    .product-image img {
        max-width: 100%;
        height: auto;
    }

    .product-details {
        padding: 20px;
    }

    .product-title {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .product-description {
        font-size: 1.2rem;
        margin-bottom: 20px;
        word-wrap: break-word;
        word-break: break-all;
    }

    .product-price {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 1rem;
    }
</style>