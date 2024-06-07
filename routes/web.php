<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\ManagerOrderController;
use App\Http\Controllers\NewsSliderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\Manager\ManagerProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\AdminRoleMiddleware;
use App\Http\Middleware\ManagerRoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::post("/logout", function (){
    return view('main.index');
});

Auth::routes();

//главная
Route::get('/main', [MainController::class, 'index'])->name('main.index');



//контакты
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contact.store');

//о нас
Route::get('/about', function () {
    return view('about.about');
})->name('about.index');



//доставка
Route::get('/delivery', function () {
    return view('delivery.delivery');
})->name('delivery.index');

//маршруты пользователя
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
});


//Маршруты администратора
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(AdminRoleMiddleware::class);
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users')->middleware(AdminRoleMiddleware::class);
    Route::get('/user/{id}/edit', [AdminController::class, 'userEdit'])->name('admin.users.edit')->middleware(AdminRoleMiddleware::class);
    Route::put('/user/{id}', [AdminController::class, 'userRoleUpdate'])->name('admin.users.update')->middleware(AdminRoleMiddleware::class);

    Route::get('/contacts', [ContactController::class, 'adminList'])->name('admin.contacts')->middleware(AdminRoleMiddleware::class);
    Route::delete('/contacts/destroy/{id}', [ContactController::class, 'adminDestroy'])->name('admin.contacts.destroy')->middleware(AdminRoleMiddleware::class);

    Route::get('/sliders', [NewsSliderController::class, 'index'])->name('admin.sliders')->middleware(AdminRoleMiddleware::class);;
    Route::post('/sliders', [NewsSliderController::class, 'store'])->name('admin.sliders.store')->middleware(AdminRoleMiddleware::class);;
    Route::delete('/sliders/{id}', [NewsSliderController::class, 'destroy'])->name('admin.sliders.destroy')->middleware(AdminRoleMiddleware::class);;
    Route::get('/sliders/{id}/edit', [NewsSliderController::class, 'edit'])->name('admin.sliders.edit')->middleware(AdminRoleMiddleware::class);;
    Route::put('/sliders/{id}', [NewsSliderController::class, 'update'])->name('admin.sliders.update')->middleware(AdminRoleMiddleware::class);;
});

//Маршруты менеджера
Route::middleware(['auth'])->prefix('manager')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('manager.dashboard')->middleware(ManagerRoleMiddleware::class);
    Route::get('/contacts', [ContactController::class, 'managerList'])->name('manager.contacts')->middleware(ManagerRoleMiddleware::class);
    Route::delete('/contacts/destroy/{id}', [ContactController::class, 'managerDestroy'])->name('manager.contacts.destroy')->middleware(ManagerRoleMiddleware::class);

    Route::get('/products', [ManagerProductController::class, 'index'])->name('manager.products')->middleware(ManagerRoleMiddleware::class);
    Route::get('/products/create', [ManagerProductController::class, 'create'])->name('manager.products.create')->middleware(ManagerRoleMiddleware::class);
    Route::post('/products/store', [ManagerProductController::class, 'store'])->name('manager.products.store')->middleware(ManagerRoleMiddleware::class);
    Route::get('/products/edit/{id}', [ManagerProductController::class, 'edit'])->name('manager.products.edit')->middleware(ManagerRoleMiddleware::class);
    Route::put('/products/update/{id}', [ManagerProductController::class, 'update'])->name('manager.products.update')->middleware(ManagerRoleMiddleware::class);
    Route::delete('/products/destroy/{id}', [ManagerProductController::class, 'destroy'])->name('manager.products.destroy')->middleware(ManagerRoleMiddleware::class);

    Route::get('/orders', [ManagerOrderController::class, 'index'])->name('manager.orders.index')->middleware(ManagerRoleMiddleware::class);
    Route::get('/orders/edit/{id}', [ManagerOrderController::class, 'edit'])->name('manager.orders.edit')->middleware(ManagerRoleMiddleware::class);
    Route::put('/orders/update/{id}', [ManagerOrderController::class, 'updateStatus'])->name('manager.orders.update')->middleware(ManagerRoleMiddleware::class);
    });

//маршруты каталога и товаров
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


//маршруты корзины и оформления заказа
Route::middleware('auth')->group(function() {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');
    Route::get('/cart/order', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/cart/order/confirm', [CartController::class, 'checkout'])->name('cart.confirm');

});


//маршруты отзывов
Route::middleware('auth')->group(function() {
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::put('/reviews/update/{id}', [ReviewController::class,'update'])->name('reviews.update');
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('/reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::delete('/reviews/{id}/delete', [ReviewController::class, 'destroy'])->name('reviews.delete');

});


//маршруты избранного
Route::middleware('auth')->group(function() {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/add', [FavoriteController::class, 'add'])->name('favorites.add');
    Route::delete('/favorites/{id}/remove', [FavoriteController::class, 'remove'])->name('favorites.remove');
});


//маршруты заказов
Route::middleware('auth')->group(function() {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

    Route::patch('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
});


