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


Route::get('/index', function () {
    return view('index');
})->name("index");
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');
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
Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/order/history', function () {
    return view('orderhistory');
})->name('order.history');

Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');
