@extends("layouts.layout")
@section("content")
    <!-- cart section -->

    <section class="cart_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h1>
                    Ваши избранные товары
                </h1>
            </div>
            <div class="row">
                <!-- Example cart item -->
{{--                @foreach($cartItems as $item)--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                        <div class="box">--}}
{{--                            <div>--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{ asset('assets/images/' . $item['image']) }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="detail-box">--}}
{{--                                    <a href="">--}}
{{--                                        {{ $item['name'] }}--}}
{{--                                    </a>--}}
{{--                                    <h6>--}}
{{--                                        ${{ $item['price'] }}--}}
{{--                                    </h6>--}}
{{--                                    <div class="quantity-box">--}}
{{--                                        <label for="quantity_{{ $item['id'] }}">Quantity:</label>--}}
{{--                                        <input type="number" id="quantity_{{ $item['id'] }}" name="quantity_{{ $item['id'] }}" value="{{ $item['quantity'] }}" min="1">--}}
{{--                                    </div>--}}
{{--                                    <div class="remove-box">--}}
{{--                                        <button class="btn btn-danger" onclick="removeItem({{ $item['id'] }})">Remove</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
            <div class="total-box">
                <h3>
{{--                    Total: $<span id="total-price">{{ $totalPrice }}</span>--}}
                    Total price:
                </h3>
            </div>
            <div class="btn-box">
                <a href="./checkout" class="btn btn-primary">
                    Checkout
                </a>
            </div>
        </div>
    </section>

    <script>
        // Example JavaScript to handle quantity changes and remove item
        function removeItem(itemId) {
            // Implement the remove item logic here
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.quantity-box input').forEach(input => {
                const price = parseFloat(input.closest('.detail-box').querySelector('h6').textContent.replace('$', ''));
                const quantity = parseInt(input.value);
                total += price * quantity;
            });
            document.getElementById('total-price').textContent = total.toFixed(2);
        }

        document.querySelectorAll('.quantity-box input').forEach(input => {
            input.addEventListener('change', updateTotal);
        });

        updateTotal();
    </script>
@endsection
