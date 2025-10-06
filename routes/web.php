<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
Route::get('/', function () {
    return view('index');
});
Route::get('/products', [CartController::class, 'showProducts'])->name('products');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
