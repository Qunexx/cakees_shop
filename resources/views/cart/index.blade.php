@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center mb-5">
            <h2 class="mt-5">Корзина</h2>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            @foreach($cartItems as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" id="item-{{ $item->id }}">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}"
                                 class="img-fluid" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="detail-box">
                            <a href="{{ route('products.show', $item->product->id) }}"
                               class="text-dark">{{ $item->product->name }}</a>
                            <h6>Цена: {{ number_format($item->product->price, 2) }}р</h6>
                            <h6>Кол-во: {{ ($item->quantity) }}</h6>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="total-box mt-4 text-center">
            <h3>Сумма: <span id="total-price">{{ number_format($totalPrice) }} руб</span></h3>
        </div>
        <div class="btn-box text-center">
            <a href="{{ route('order.index') }}" class="btn btn-primary mb-5">Оплатить</a>
        </div>
    </div>
    <div class="footer"></div>
@endsection
