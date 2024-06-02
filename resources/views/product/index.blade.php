
@extends("layouts.layout")
@section("content")

    <section class="product_section layout_padding">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            <div class="heading_container heading_center">
                <h2>Наши изделия</h2>
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


                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary add-to-cart-btn mb-2">Добавить в корзину</button>
                                    </form>
                                    <form action="{{ route('favorites.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary add-to-cart-btn mb-2">
                                            Добавить в избранное❤️
                                        </button>
                                    </form>

                                    <a class="btn btn-secondary mt-auto" href="{{route("products.show",$product->id)}}" data-id="{{$product->id}}">Подробнее о изделии</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>


@endsection
