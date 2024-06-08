<!-- resources/views/favorites/requestsList.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="mt-5">Избранное</h2>
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
        @if($favorites->isEmpty())
            <div class="text-center">
                <h3 class="mt-5">
                    Кажется здесь пусто, обязательно нужно исправить это, добавив в избранное наивкуснейший тортик из
                    нашей пекарни =)
                </h3>
                <div class="btn-box mt-5">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Перейти в каталог</a>
                </div>
            </div>
        @endif
        <div class="row mt-5">
            @foreach($favorites as $favorite)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" id="item-{{ $favorite->id }}">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('images/' . $favorite->product->image) }}"
                                 alt="{{ $favorite->product->name }}"
                                 class="img-fluid" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="detail-box">
                            <a href="{{ route('products.show',  $favorite->product->id) }}"
                               class="text-dark">{{ $favorite->product->name}}</a>
                            <h6>Цена: {{ number_format($favorite->product->price, 2) }}р</h6>
                            <div class="button-box">
                                <form action="{{ route('cart.add')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$favorite->product->id}}">
                                    <button type="submit" class="btn btn-primary add-to-cart-btn">Добавить в корзину
                                    </button>
                                </form>
                                <form action="{{ route('favorites.remove',$favorite->product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="product_id" value="{{$favorite->product->id}}">
                                    <button type="submit" class="btn btn-danger remove-favorite-btn"
                                            data-id="{{ $favorite->id }}">Удалить из избранного
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="footer"></div>
    </div>

@endsection

<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>
