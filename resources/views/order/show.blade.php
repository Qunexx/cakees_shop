@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-secondary mb-5" href="{{route('orders.index')}}">Назад</a>
        <h2>Заказ #{{ $order->id }}</h2>
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
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Детали заказа</h5>
                <p><strong>Статус заказа:</strong> {{ $order->status }}</p>
                <p><strong>Адрес доставки:</strong> {{ $order->address }}</p>
                <p><strong>Способ оплаты:</strong> {{ $order->payment_method }}</p>
                <p><strong>Комментарий:</strong> {{ $order->comment }}</p>
                <p><strong>Дата заказа:</strong> {{ $order->created_at->format('d M Y H:i') }}</p>
                <p><strong>Общая стоимость:</strong> {{ number_format($order->total_price, 2) }} руб.</p>

                <h5>Товары в заказе:</h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена за единицу</th>
                        <th>Количество</th>
                        <th>Общая цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($order->items as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ number_format($item->price, 2) }} руб.</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ number_format($item->price * $item->quantity, 2) }} руб.</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="footer"></div>
@endsection

<style>
    .footer {
        margin-top: 10%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>
