@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center mb-5">
            <h2 class="mt-5">Детали заказа №{{ $order->id }}</h2>
        </div>
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('manager.orders.index') }}" class="btn btn-secondary">Назад</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Номер заказа</th>
                <th scope="col">Дата</th>
                <th scope="col">Сумма</th>
                <th scope="col">Статус</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at->format('d.m.Y') }}</td>
                <td>{{ $order->total_price }} руб</td>
                <td>{{ $order->status }}</td>
            </tr>
            </tbody>
        </table>
        <form class="mb-lg-5" action="{{ route('manager.orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="status">Статус</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="considering" {{ $order->status == 'considering' ? 'selected' : '' }}>
                        Рассматривается
                    </option>
                    <option value="in progress" {{ $order->status == 'in progress' ? 'selected' : '' }}>В процессе
                    </option>
                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Завершен</option>
                    <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Отменен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary md-5">Сохранить изменения</button>
        </form>
    </div>
    <div class="footer"></div>
@endsection


<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>

