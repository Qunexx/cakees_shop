<!-- resources/views/products/edit.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Редактировать товар</h2>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('manager.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена(в руб)</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}"
                       required>
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mt-3">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
            <a href="{{ route('manager.products') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection

@section('scripts')
@endsection
