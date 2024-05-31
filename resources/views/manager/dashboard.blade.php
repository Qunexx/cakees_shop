<!-- resources/views/manager/dashboard.blade.php -->
@extends('layouts.layout')

@section('content')
    <section class="delivery_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Панель управления менеджера</h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Управление товарами</h5>
                        <a href="{{ route('manager.products') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Управление заказами</h5>
                        <a href="{{ route('manager.orders') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Заявки на обратную связь</h5>
                        <a href="{{ route('manager.contacts') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-5">
            <div class="col-md-4">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
            </div>
        </div>

    </section>
@endsection
