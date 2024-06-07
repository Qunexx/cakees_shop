@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center mb-5">
            <h2 class="mt-5">Оплата</h2>
        </div>
        <a href="{{ route('cart.index') }}" class="btn btn-secondary mb-3">Назад</a>
        <h3>Список товаров:</h3>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="row">
                @foreach($cartItems as $item)
                    <div class="col-md-12 mb-3">
                        <div class="box">
                            <div class="detail-box">
                                <a href="{{ route('products.show', $item->product->id) }}"
                                   class="text-dark">{{ $item->product->name }}</a>
                                <h6>Цена: {{ number_format($item->product->price, 2) }}р</h6>
                                <h6>Кол-во: {{ ($item->quantity) }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
                    <div class="total-box mt-4 text-center">
                        <h3>Сумма: <span id="total-price">{{ number_format($totalPrice) }} руб</span></h3>
                    </div>
            <div class="form-group mt-4">
                <label for="paymentMethod">Способ оплаты:</label>
                <select id="paymentMethod" class="form-control" name="payment_method">
                    @if(auth()->user())
                        <option value="card">Картой из профиля</option>
                    @else
                        <option value="card" disabled>Картой из профиля (необходимо добавить карту в профиль)</option>
                    @endif
                    <option value="cash">Наличными при получении</option>
                </select>

                @if(!auth()->user())
                    <div class="alert alert-warning mt-3">
                        Ваша карта не добавлена в профиль. Пожалуйста, <a href="{{ route('profile.index') }}">добавьте информацию о вашей карте</a> для использования этого способа оплаты.
                    </div>
                @endif


            </div>
            <div class="form-group mt-3">
                <label for="address">Адрес доставки:</label>
                <input type="text" id="address" name="address" class="form-control " placeholder="Введите адрес" required>
            </div>
            <div class="form-group mt-3">
                <label for="comment">Комментарий к заказу:</label>
                <textarea id="comment" name="comment" class="form-control" rows="3" placeholder="Добавьте комментарий" ></textarea>
            </div>

            <div class="btn-box text-center mt-4">
                <button type="submit" class="btn btn-success mb-5">Оформить заказ</button>
            </div>
            </div>
        </form>
    </div>

    <div class="footer"></div>
@endsection

<style>
    .footer {
        margin-top: 20%;
    }
</style>
