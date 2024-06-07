
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="mt-5">Заявки на обратную связь</h2>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('manager.dashboard') }}" class="btn btn-secondary mb-3">Назад</a>
        <table class="table table-bordered mb-5">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Сообщение</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <form action="{{ route('manager.contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="footer"> </div>
@endsection




<style>
    .footer {
        margin-bottom: 20%; /* отступ снизу */
    }</style>
