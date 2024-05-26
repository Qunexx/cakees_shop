@extends('layouts.layout')
@section('content')

    <!-- order History Section -->
    <section class="order_history_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 class="mt-5">История заказов</h2>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="order_history_container">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Items</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Example order History -->
                            <tr>
                                <td>12345</td>
                                <td>2023-05-20</td>
                                <td>
                                    <ul>
                                        <li>Wedding Cake</li>
                                        <li>Cupcake</li>
                                    </ul>
                                </td>
                                <td>$70</td>
                                <td>Delivered</td>
                            </tr>
                            <tr>
                                <td>12346</td>
                                <td>2023-06-15</td>
                                <td>
                                    <ul>
                                        <li>Birthday Cake</li>
                                    </ul>
                                </td>
                                <td>$35</td>
                                <td>Delivered</td>
                            </tr>
                            <!-- Add more orders as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end order History Section -->

@endsection
