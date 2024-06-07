@extends('layouts.layout')
@section('content')
    <!-- delivery section -->

    <section class="delivery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets/images/delivery-img.jpg') }}" alt="Delivery Image" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Delivery Services
                            </h2>
                        </div>
                        <p>
                            At CakeeShop, we offer reliable and efficient delivery services to ensure that your cakes and pastries arrive fresh and on time. Our dedicated delivery team is committed to providing you with the best service possible, handling your orders with care and precision.
                        </p>
                        <p>
                            We understand the importance of timely delivery, especially for special occasions. That's why we offer various delivery options to suit your needs. Whether it's a birthday, wedding, or any other celebration, you can count on us to deliver your orders right to your doorstep.
                        </p>
                        <a href="{{ route('contacts.index') }}">
                            Contact Us for More Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- end delivery section -->
