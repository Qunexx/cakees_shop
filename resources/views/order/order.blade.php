@extends('layouts.layout')
@section('content')

    <!-- Payment Section -->
    <section class="payment_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 class="mt-5">Payment</h2>
            </div>

            <div class="row mt-5">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <form>
                            <!-- Payment Information -->
                            <h5>Payment Information</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Card Number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cardholder Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Expiry Date (MM/YY)" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CVV" />
                                    </div>
                                </div>
                            </div>

                            <!-- Billing Information -->
                            <h5>Billing Information</h5>
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
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Billing Address" />
                                    </div>
                                </div>
                            </div>

                            <!-- order Summary -->
                            <h5>Order Summary</h5>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Order Details" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Pay Button -->
                            <div class="btn-box">
                                <button type="submit" class="btn btn-primary">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Payment Section -->

@endsection
