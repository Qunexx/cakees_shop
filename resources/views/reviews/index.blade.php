@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center ">
            <h2 class="mt-5">Мои отзывы</h2>
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
            @if ($reviews->isEmpty())
            <h3 class="mt-5">
                Кажется здесь пусто, обязательно напишите отзыв к одному из наших тортов =)
            </h3>
            @endif
        </div>

        <div class="row mt-3">
            @foreach($reviews as $review)
                <div class="col-md-12 mb-3">
                    <div class="review-box p-3 border rounded">
                        <h4>Название товара: {{ $review->product->name }}</h4>
                        <h5>Отзыв: {{ $review->comment }}</h5>
                        <h5>Рейтинг: {{ $review->rating }} из 5</h5>
                        <small class="text-muted">Оставлен {{ $review->created_at->format('d.m.Y') }}</small>
                        <div class="mt-3">
                            <a href="{{ route('products.show', $review->product->id) }}" class="btn btn-primary">Показать</a>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-info">Изменить</a>
                            <form action="{{ route('reviews.delete', $review->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="footer"></div>
@endsection
<style>
.footer {
margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
}
</style>
