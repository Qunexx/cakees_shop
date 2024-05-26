@extends('layouts.layout')

@section('content')

    <section class="about_section">
        <div class="container">
            <div class="heading_container heading_center my-5">
                <h2>Управление товарами</h2>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <a href="{{ route('manager.dashboard') }}" class="btn btn-secondary">Назад</a>
                <a href="{{ route('manager.products.create') }}" class="btn btn-primary">Добавить товары</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($products->isEmpty())
                <div class="empty-state text-center py-5">
                    <p>Товаров нет</p>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4" >
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" >
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4" >
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                    </div>
                </div>
        </div>
        </div>

            @else
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-id="{{ $product->id }}">
                            <div class="card h-100">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{Str::limit($product->description, 10)}}</p>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }} руб</h6>
                                    <div class="mt-auto">
                                        <a href="{{ route('manager.products.edit', $product->id) }}" class="btn btn-warning w-100 mb-2">Редактировать</a>
                                        <form action="{{ route('manager.products.destroy', $product->id) }}" method="POST" class="d-inline-block w-100">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Вы уверены, что хотите удалить этот товар?')">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </section>

@endsection

<style>
    .card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 1rem;
        margin-bottom: 1rem;
    }
    .card-subtitle {
        font-size: 1rem;
        color: #6c757d;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .empty-state {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8f9fa;
        padding: 3rem;
        margin-top: 2rem;
    }
</style>
