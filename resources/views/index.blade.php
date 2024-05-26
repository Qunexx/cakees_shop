@extends('layouts.layout')

@section('content')
    <!-- slider section -->
    <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">
                                <div class="detail-box">
                                    <h1>Delicious Cakes</h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-6">
                                <div class="img-box col-lg-10 mx-auto px-0">
                                    <img src="{{ asset('assets/images/slider-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">
                                <div class="detail-box">
                                    <h1>Delicious Cakes</h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('products') }}" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-6">
                                <div class="img-box col-lg-10 mx-auto px-0">
                                    <img src="{{ asset('assets/images/slider-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">
                                <div class="detail-box">
                                    <h1>Delicious Cakes</h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('products') }}" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-6">
                                <div class="img-box col-lg-10 mx-auto px-0">
                                    <img src="{{ asset('assets/images/slider-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-bs-target="#customCarousel1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#customCarousel1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#customCarousel1" data-bs-slide-to="2"></li>
                </ol>
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
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/c1.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>Birthday Cakes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/c2.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>Wedding Cakes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/c3.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>Cupcakes</h5>
                        </div>
                    </div>
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
                            <h2>We Are Cakees_shop</h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All
                        </p>
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end about section -->

<!-- product section -->
@section("content3")
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Products</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Wedding Cake</a>
                                <h6>$38</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p2.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Cake</a>
                                <h6>$15</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p3.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Cupcake</a>
                                <h6>$30</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p4.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Birthday Cake</a>
                                <h6>$35</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p5.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Cupcake</a>
                                <h6>$12</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p6.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Birthday Cake</a>
                                <h6>$32</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p7.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Cake</a>
                                <h6>$35</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p8.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">Cupcake</a>
                                <h6>$15</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="./product">View All Products</a>
            </div>
        </div>
    </section>
@endsection
<!-- end product section -->

<!-- client section -->
@section("content4")
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>What Says Our Customers</h2>
            </div>
            <div class="carousel-wrap row">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/client1.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                                <h6>Klara Smith</h6>
                                <p>magna aliqua</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/client2.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                                <h6>Jessica Hawk</h6>
                                <p>magna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end client section -->
<!-- contact section -->
@section("content5")
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- end contact section -->
