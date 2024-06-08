@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <div class="heading_container heading_center my-5">
                <h2>Управление заказами</h2>
            </div>
        </div>
        <a href="{{ route('manager.dashboard') }}" class="btn btn-secondary">Назад</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Номер заказа</th>
                <th scope="col">Дата</th>
                <th scope="col">Сумма</th>
                <th scope="col">Статус</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at->format('d.m.Y') }}</td>
                    <td>{{ $order->total_price }} руб</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('manager.orders.edit', $order->id) }}"
                           class="btn btn-info btn-sm">Подробнее</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="footer"></div>
@endsection


<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>

