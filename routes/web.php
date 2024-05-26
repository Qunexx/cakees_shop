<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post("/logout", function (){
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('index');
})->name("index");
Route::get('/product', function () {
    return view('product');
})->name('products');
Route::get('/contact', function () {
    return view('contact');
})->name("contact");
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/account', function () {
    return view('userAccount');
})->name('account');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');
Route::get('/order/history', function () {
    return view('delivery');
})->name('order.history');
