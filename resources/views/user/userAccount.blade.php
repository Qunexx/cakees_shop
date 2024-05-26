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
                    <div class="form_container">
                        <form>
                            <!-- Personal Information -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Имя" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Фамилия" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Отчество" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <h5>Ваш адрес</h5>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address" />
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery Options -->
                            <h5>Способ доставки</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="deliveryOptions" id="delivery" value="delivery" checked>
                                        <label class="form-check-label" for="delivery">
                                            Delivery
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="deliveryOptions" id="pickup" value="pickup">
                                        <label class="form-check-label" for="pickup">
                                            Pickup
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Methods -->
                            <h5>Способ оплаты</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethods" id="card" value="card" checked>
                                        <label class="form-check-label" for="card">
                                            Card
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethods" id="cash" value="cash">
                                        <label class="form-check-label" for="cash">
                                            Cash
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- order History -->
                            <div class="btn-box mb-3">
                                <a href="{{ route('order.history') }}" class="btn btn-secondary">История заказов</a>
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
    <!-- end Personal Account Section -->

@endsection
