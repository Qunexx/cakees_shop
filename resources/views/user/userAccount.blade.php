@extends('layouts.layout')
@section('content')

    <!-- Personal Account Section -->
    <section class="account_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 class="mt-5">Личный кабинет</h2>
            </div>

            <div class="row mt-5">
                <div class="col-md-9 mx-auto">
                    <div id="success-message" class="alert alert-success" style="display:none;"></div>
                    <div id="error-message" class="alert alert-danger" style="display:none;"></div>
                    <div class="form_container">
                        <form id="profile-form">
                            @csrf
                            <!-- Personal Information -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="Имя" value="{{ $profile->first_name ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Фамилия" value="{{ $profile->last_name ?? '' }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="middle_name" placeholder="Отчество" value="{{ $profile->middle_name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_number" placeholder="Номер телефона" value="{{ $profile->phone_number ?? '' }}" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <h5>Ваш адрес</h5>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Адрес" value="{{ $profile->address ?? '' }}" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery Options -->
                            <h5>Способ доставки</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="delivery_options" id="delivery" value="delivery" {{ ($profile->delivery_options ?? '') == 'delivery' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="delivery">
                                            Доставка
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="delivery_options" id="pickup" value="pickup" {{ ($profile->delivery_options ?? '') == 'pickup' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="pickup">
                                            С собой
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Methods -->
                            <h5>Способ оплаты</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_methods" id="card" value="card" {{ ($profile->payment_methods ?? '') == 'card' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="card">
                                            Картой
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_methods" id="cash" value="cash" {{ ($profile->payment_methods ?? '') == 'cash' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="cash">
                                            Наличными
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Order History -->
                            <div class="btn-box mb-3">
                                <a href="{{ route('order.index') }}" class="btn btn-secondary">История заказов</a>
                            </div>
                            <div class="btn-box mb-3">
                                <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Мои отзывы</a>
                            </div>

                            <!-- Save Button -->
                            <div class="btn-box">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('profile-form').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('{{ route("profile.update") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('success-message').innerText = data.message;
                        document.getElementById('success-message').style.display = 'block';
                        document.getElementById('error-message').style.display = 'none';
                    } else {
                        document.getElementById('error-message').innerText = data.message;
                        document.getElementById('error-message').style.display = 'block';
                        document.getElementById('success-message').style.display = 'none';
                    }
                })
                .catch(error => {
                    document.getElementById('error-message').innerText = 'Something went wrong. Please try again.';
                    document.getElementById('error-message').style.display = 'block';
                    document.getElementById('success-message').style.display = 'none';
                });
        });
    </script>
@endsection
