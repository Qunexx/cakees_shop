@extends("layouts.layout")
@section("content")
    <!-- Favorites Section -->
    <section class="favorites_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Ваши избранные товары</h2>
            </div>
            <div class="row" id="favorites-container">
                <!-- Example favorite item -->
                <div class="col-sm-6 col-md-4 col-lg-3 favorite-item" data-id="1">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/p1.png') }}" alt="Wedding Cake" class="img-fluid">
                        </div>
                        <div class="detail-box">
                            <a href="#">Wedding Cake</a>
                            <h6>$38</h6>
                            <div class="button-box">
                                <button class="btn btn-primary add-to-cart-btn" data-id="1">Добавить в корзину</button>
                                <button class="btn btn-danger remove-favorite-btn" data-id="1">Удалить из избранного</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 favorite-item" data-id="2">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/p2.png') }}" alt="Cake" class="img-fluid">
                        </div>
                        <div class="detail-box">
                            <a href="#">Cake</a>
                            <h6>$15</h6>
                            <div class="button-box">
                                <button class="btn btn-primary add-to-cart-btn" data-id="2">Добавить в корзину</button>
                                <button class="btn btn-danger remove-favorite-btn" data-id="2">Удалить из избранного</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more favorite items as needed -->
            </div>
            <div class="total-box mt-4 text-center">
                <h3>Total: $<span id="total-price">53</span></h3>
            </div>
            <div class="btn-box text-center">
                <a href="{{route("order")}}" class="btn btn-primary">Хотите повторить?</a>
            </div>
        </div>
    </section>

    <script>
        // JavaScript to handle removing favorite items
        function removeFavorite(itemId) {
            const item = document.querySelector(`.favorite-item[data-id="${itemId}"]`);
            if (item) {
                item.remove();
                updateTotal();
            }
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.detail-box h6').forEach(priceElement => {
                const price = parseFloat(priceElement.textContent.replace('$', ''));
                total += price;
            });
            document.getElementById('total-price').textContent = total.toFixed(2);
        }

        document.querySelectorAll('.remove-favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                removeFavorite(this.dataset.id);
            });
        });

        // Update total price on page load
        updateTotal();
    </script>
@endsection

<style>
    .img-box {
        width: 100%;
        padding-top: 75%; /* Maintain aspect ratio */
        position: relative;
    }
    .img-box img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .button-box {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .button-box button {
        flex: 1;
        margin: 0 5px;
    }
    .detail-box {
        text-align: center;
    }
</style>
