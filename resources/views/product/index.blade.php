<!-- resources/views/products/index.blade.php -->
@extends("layouts.layout")
@section("content")
    <!-- products section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Products</h2>
            </div>

            <div class="row">

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-id="{{ $product->id }}">
                            <div class="card h-100">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{Str::limit($product->description, 10)}}</p>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }} руб</h6>
                                    <button class="btn btn-primary add-to-cart-btn" data-id="{{ $product->id }}">Добавить в корзину</button>


                                    <a class="btn btn-secondary mt-3" href="{{route("products.show",$product->id)}}" data-id="{{$product->id}}">Подробнее о изделии</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function () {
                    alert('Added to cart: ' + this.getAttribute('data-id'));
                });
            });
        });
    </script>
@endsection
