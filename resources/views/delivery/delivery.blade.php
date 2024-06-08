@extends('layouts.layout')
@section('content')
    <!-- delivery section -->

    <section class="delivery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets/images/delivery-img.jpg') }}" alt="Delivery Image" class="img-fluid"
                             style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2 class="mt-5 mb-3">
                                Услуги доставки
                            </h2>
                        </div>
                        <p>
                            В Торт'Эль мы предлагаем надежные и эффективные услуги доставки, чтобы ваши торты рибывали
                            свежими и вовремя. Наша преданная команда доставки стремится предоставить вам лучший сервис,
                            обращаясь с вашими заказами с заботой и точностью.
                        </p>
                        <p>
                            Мы понимаем важность своевременной доставки, особенно для особых мероприятий. Именно поэтому
                            мы предлагаем различные варианты доставки, чтобы удовлетворить ваши потребности. Будь то
                            день рождения, свадьба или любое другое торжество, вы можете рассчитывать на нас, чтобы
                            доставить ваши заказы прямо к вашей двери.
                        </p>
                        <p>
                            Мы осуществляем доставку по всему городу и в радиусе 20 минут от него.
                        </p>

                        <a href="{{ route('contacts.index') }}">
                            Свяжитесь с нами для получения дополнительной информации.
                        </a>

                        <div class="delivery_options mt-4">
                            <h3>Варианты доставки</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-truck" aria-hidden="true"></i> Доставка курьером: Мы доставим ваш
                                    заказ прямо к вашей двери, чтобы вы могли наслаждаться свежими тортами без лишних
                                    хлопот.
                                </li>
                                <li>
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i> Самовывоз: Вы можете
                                    забрать свой заказ в нашем магазине в удобное для вас время.
                                </li>
                            </ul>
                        </div>
                        <a href="{{route('products.index') }}" class="btn btn-primary">Заказать сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end delivery section -->
