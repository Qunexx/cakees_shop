@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Редактировать отзыв
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Используйте метод PUT для обновления ресурса -->

                            <div class="form-group mb-3">
                                <label for="comment">Комментарий</label>
                                <textarea name="comment" id="comment" class="form-control" rows="3">{{ $review->comment }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="rating">Рейтинг</label>
                                <select name="rating" id="rating" class="form-select">
                                    <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5</option>
                                </select>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="anonymous" name="is_anonymous">
                                <label class="form-check-label" for="anonymous">Анонимный отзыв</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Обновить отзыв</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer"></div>
@endsection
<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>

