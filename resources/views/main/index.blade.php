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

<!-- category section -->
@section("content1")
    <section class="cat_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('products.index')}}" class="box-link">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/c1.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Birthday Cakes</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('products.index')}}" class="box-link">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/c2.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Wedding Cakes</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('products.index')}}" class="box-link">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/c3.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Cupcakes</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end category section -->

<!-- about section -->
@section("content2")
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets/images/about-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>We Are Торт’ Эль</h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All
                        </p>
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end about section -->

<!-- products section -->
@section("content3")
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Наши изделия</h2>
            </div>

            <div class="row">

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-id="{{ $product->id }}">
                            <div class="card h-100">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                     class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{Str::limit($product->description, 10)}}</p>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }} руб</h6>

                                    <a class="btn btn-secondary mt-3" href="{{route("products.show",$product->id)}}"
                                       data-id="{{$product->id}}">Подробнее о изделии</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="btn-box">
                    <a href="{{route("products.index")}}">Показать все изделия</a>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end products section -->


<!-- contact section -->
@section("content5")
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 class="mt-5">Свяжитесь с нами</h2>
                <h3 class="align-content-center">Если у вас есть какие-то вопросы или предложения</h3>
            </div>

            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="ФИО" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Почта"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" maxlength="15" name="phone"
                                               placeholder="Номер телефона" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" name="message" placeholder="Сообщение" rows="4"
                                                  required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="btn-box text-center">
                                        <button type="submit" class="btn btn-primary">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection


<!-- end contact section -->
