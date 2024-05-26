<!-- resources/views/products/create.blade.php -->
@extends('layouts.layout')

@section('content')
    <section class="about_section layout_padding ">
    <div class="container">

        <div class="heading_container heading_center">
            <h2>Добавить новый товар</h2>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('manager.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена(в руб)</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить товар</button>
            <a href="{{ route('manager.products') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
    </section>
@endsection
