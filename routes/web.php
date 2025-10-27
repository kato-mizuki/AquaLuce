<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReviewController; // 追加
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

// -----------------------------
// TOPページ（誰でもアクセス可能）
Route::get('/', [ProductController::class, 'home'])->name('home');

// 商品ページ（誰でもアクセス可能）
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// カート関連（誰でもアクセス可能）
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/purchase', [CartController::class, 'purchase'])->name('cart.purchase');

// 注文関連（誰でもアクセス可能）
Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// -----------------------------
// 認証関連
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// -----------------------------
// ログイン必須ルート
Route::middleware('auth')->group(function () {

    // お気に入り関連
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/add/{id}', [FavoriteController::class, 'add'])->name('favorites.add');
    Route::post('/favorites/remove/{id}', [FavoriteController::class, 'remove'])->name('favorites.remove');
    Route::post('/favorites/toggle/{id}', [FavoriteController::class, 'toggle'])->name('favorites.toggle');

    // レビュー投稿
    Route::post('/products/{id}/review', [ReviewController::class, 'store'])->name('review.store');
});
