@extends('layouts.layout')
@section('content')



    <!-- contact section -->
    <!-- contact section -->
    @section("content5")
        <section class="contact_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2 class="mt-5">Contact Us</h2>
                    <h1 class="align-content-center">If you have any questions</h1>
                </div>

                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="form_container">
                            <form>
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
                                <div class="form-group mb-3">
                                    <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                                </div>
                                <div class="btn-box">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    <!-- end contact section -->

@endsection
