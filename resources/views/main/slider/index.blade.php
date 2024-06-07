@extends('layouts.layout')
@section('content')
    <!-- slider section -->
    <!-- slider section -->
    <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                @foreach($sliders as $index => $slider)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="detail-box">
                                        <h1>{{ $slider->title }}</h1>
                                        <p>{{ $slider->description }}</p>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-6">
                                    <div class="img-box col-lg-10 mx-auto px-0">
                                        <img src="{{ asset('images/' . $slider->image) }}" alt="{{ $slider->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    @foreach($sliders as $index => $slider)
                        <li data-bs-target="#customCarousel1" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="font-size: 3em;"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="font-size: 3em;"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end slider section -->
@endsection
