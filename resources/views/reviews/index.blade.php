
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Отзывы покупателей</h2>
        </div>
        <div class="row">
            @foreach($reviews as $review)
                <div class="col-md-12 mb-3">
                    <div class="review-box">
                        <h5>{{ $review->user->name }}</h5>
                        <p>{{ $review->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
