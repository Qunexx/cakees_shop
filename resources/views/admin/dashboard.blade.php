<!-- resources/views/manager/dashboard.blade.php -->
@extends('layouts.layout')

@section('content')
    <section class="delivery_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="mb-5">Панель управления администратора</h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Управление пользователями</h5>
                        <a href="{{ route('admin.users') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Управление заявками на обратную связь</h5>
                        <a href="{{ route('admin.contacts') }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
                </div>
                    <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Управление блоком новостей и объявлений</h5>
                        <a href="{{ route('manager.products') }}" class="btn btn-primary">Перейти</a>
                    </div>
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
