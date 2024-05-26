@extends("layouts.layout")
@section("content")
    <!-- products section -->

    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Products
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p1.png")}}" alt="Wedding Cake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Wedding Cake
                                </a>
                                <h6>
                                    $38
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="1">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p2.png")}}" alt="Cake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Cake
                                </a>
                                <h6>
                                    $15
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="2">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p3.png")}}" alt="Cupcake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Cupcake
                                </a>
                                <h6>
                                    $30
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="3">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p4.png")}}" alt="Birthday Cake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Birthday Cake
                                </a>
                                <h6>
                                    $35
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="4">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p5.png")}}" alt="Cupcake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Cupcake
                                </a>
                                <h6>
                                    $12
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="5">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p6.png")}}" alt="Birthday Cake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Birthday Cake
                                </a>
                                <h6>
                                    $32
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="6">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p7.png")}}" alt="Cake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Cake
                                </a>
                                <h6>
                                    $35
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="7">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{asset("assets/images/p8.png")}}" alt="Cupcake">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Cupcake
                                </a>
                                <h6>
                                    $15
                                </h6>
                                <button class="btn btn-primary add-to-cart-btn" data-id="8">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    More
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function () {
                    alert('Added to cart:');
                });
            });
        });
    </script>
@endsection
