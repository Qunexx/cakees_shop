<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\NewsSliderController;
use App\Http\Controllers\Manager\OrderController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\Manager\ManagerProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\ManagerRoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::post("/logout", function (){
    return view('main.index');
});

Auth::routes();


Route::get('/main', function () {
    return view('main.index');
})->name("main.index");

Route::get('/contact', function () {
    return view('contact.contact');
})->name("contact.index");
Route::get('/about', function () {
    return view('about.about');
})->name('about.index');

Route::get('/cart', function () {
    return view('cart.cart');
})->name('cart.index')->middleware('auth');
Route::get('/delivery', function () {
    return view('delivery.delivery');
})->name('delivery.index');
Route::get('/order', function () {
    return view('order.order');
})->name('order.index')->middleware('auth');

Route::get('/order/history', function () {
    return view('orderhistory.orderhistory');
})->name('order.history.index')->middleware('auth');

Route::get('/favorites', function () {
    return view('favorite.favorites');
})->name('favorites.index')->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/manager', [DashboardController::class, 'index'])->name('manager.dashboard')->middleware(ManagerRoleMiddleware::class);
    Route::get('/manager/products', [ManagerProductController::class, 'index'])->name('manager.products')->middleware(ManagerRoleMiddleware::class);
    Route::get('/manager/orders', [OrderController::class, 'index'])->name('manager.orders')->middleware(ManagerRoleMiddleware::class);


    Route::get('/manager/products/create', [ManagerProductController::class, 'create'])->name('manager.products.create')->middleware(ManagerRoleMiddleware::class);
    Route::post('/manager/products/store', [ManagerProductController::class, 'store'])->name('manager.products.store')->middleware(ManagerRoleMiddleware::class);
    Route::get('/manager/products/edit/{id}', [ManagerProductController::class, 'edit'])->name('manager.products.edit')->middleware(ManagerRoleMiddleware::class);
    Route::put('/manager/products/update/{id}', [ManagerProductController::class, 'update'])->name('manager.products.update')->middleware(ManagerRoleMiddleware::class);
    Route::delete('/manager/products/destroy/{id}', [ManagerProductController::class, 'destroy'])->name('manager.products.destroy')->middleware(ManagerRoleMiddleware::class);

    // AJAX routes for managing orders
    Route::post('/manager/orders/update-status/{id}', [OrderController::class, 'updateStatus'])->name('manager.orders.updateStatus')->middleware(ManagerRoleMiddleware::class);});

// Маршруты для товаров
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');


