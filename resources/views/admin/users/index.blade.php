@extends('layouts.layout')

@section('content')
    <section class="delivery_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Управление пользователями</h2>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Назад</a>
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
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Список пользователей и их роли</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td class="mr-3"><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary">Изменить роль</a>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
