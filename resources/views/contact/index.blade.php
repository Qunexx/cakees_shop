@extends('layouts.layout')



    @section("content5")
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="contact_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2 class="mt-5">Свяжитесь с нами</h2>
                    <h3 class="align-content-center">Если у вас есть какие-то вопросы или предложения</h3>
                </div>

                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="form_container">
                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="ФИО" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Почта" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" maxlength="15"  name="phone" placeholder="Номер телефона" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <textarea class="form-control" name="message" placeholder="Сообщение" rows="4" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-box text-center">
                                            <button type="submit" class="btn btn-primary">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endsection

