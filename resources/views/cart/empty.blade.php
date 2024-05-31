@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="heading_container heading_center">
            <h2>Корзина</h2>
        </div>
        <div class="text-center mt-5">
            <h3 class="mb-5">
                Кажется здесь пусто, обязательно нужно исправить это, заказав наивкуснейший тортик в нашей пекарне =)
            </h3>
            <div class="btn-box">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Перейти в каталог</a>
            </div>
        </div>
    </div>
    <div class="footer"></div>
@endsection

<style>
    .footer {
        margin-top: 20%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }

    .btn-primary {
        background-color: #3498db; /* основной цвет кнопки */
        border-color: #2980b9; /* цвет границы кнопки */
        padding: 10px 20px; /* внутренние отступы кнопки */
        border-radius: 5px; /* скругление углов */
        font-size: 18px; /* размер шрифта */
        transition: background-color 0.3s, border-color 0.3s; /* плавное изменение цвета при наведении */
    }

    .btn-primary:hover {
        background-color: #2980b9; /* цвет кнопки при наведении */
        border-color: #1a5276; /* цвет границы кнопки при наведении */
    }
</style>
