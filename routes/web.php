<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/purchase', [CartController::class, 'purchase'])->name('cart.purchase');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
Route::post('/favorites/add/{id}', [FavoriteController::class, 'add'])->name('favorites.add');
Route::post('/favorites/remove/{id}', [FavoriteController::class, 'remove'])->name('favorites.remove');
Route::post('/favorites/toggle/{id}', [FavoriteController::class, 'toggle'])->name('favorites.toggle');

