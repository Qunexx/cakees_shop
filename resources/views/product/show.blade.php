@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
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
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-primary add-to-cart-btn mb-2">Добавить в корзину</button>
                    </form>
                    <a class="btn btn-secondary mb-5" href="{{route("products.index")}}">Назад</a>
                    <div>
                        <h3 class="mb-3">Оставьте отзыв:</h3>

                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <label for="rating" class="form-label">Рейтинг:</label>
                                <select name="rating" id="rating" class="form-select" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option selected value ="5">5</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea name="comment" class="form-control" rows="4" placeholder="Напишите отзыв"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="anonymous" name="is_anonymous">
                                <label class="form-check-label" for="anonymous">Анонимный отзыв</label>
                            </div>

                            <button type="submit" class="btn btn-success">Отправить отзыв</button>
                        </form>
                        <hr>
                        <h3 class="mb-3">Остальные отзывы:</h3>
                        @if($product->reviews->isEmpty())
                            <p>Отзывов пока нет.</p>
                        @else
                            @foreach ($product->reviews as $review)
                                <div class="mb-3 p-3 bg-light border rounded">
                                    <p class="mb-1">Отзыв: {{ $review->comment }}</p>
                                    <p class="mb-0">Рейтинг: {{ $review->rating }} из 5</p>
                                    <p>Автор: {{ $review->is_anonymous ? 'Аноним' : $review->user->name }}</p>
                                    <small>Оставлен {{ $review->created_at->format('d.m.Y') }}</small>
                                </div>
                            @endforeach
                        @endif
                    </div>

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
