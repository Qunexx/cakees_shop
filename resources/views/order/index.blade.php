@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center mb-5">
            <h2 class="mt-5">История заказов</h2>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="order_history_container">
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
                    @if($orders->isEmpty())
                        <div class="text-center mb-3">
                            <h3 class="mt-5 ">
                                Кажется здесь пусто, обязательно нужно исправить это, добавив в избранное наивкуснейший тортик из нашей пекарни =)
                            </h3>
                        </div>
                            <div class="text-center mt-3">
                            <div class="btn-box mt-3 mb-3">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">Перейти в каталог</a>
                            </div>
                        </div>
                </div>
                        @else
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
                                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
@endsection
<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>
