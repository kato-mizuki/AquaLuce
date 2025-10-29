<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController; //カートコントローラ
use App\Http\Controllers\ProductController; // 商品
use App\Http\Controllers\OrderController;  // 注文
use App\Http\Controllers\FavoriteController; // お気に入り
use App\Http\Controllers\ReviewController; // レビュー
use App\Http\Controllers\AuthController;   // ログイン
use App\Http\Controllers\RegisterController; // サインアップ
use App\Http\Controllers\MypageController; // マイページ
use App\Http\Controllers\ProfileController; // プロフィール
use App\Http\Controllers\AddressController; // 住所
use App\Http\Controllers\Admin\AdminController;  // 管理者
use App\Http\Controllers\Admin\ProductController as AdminProductController; //　管理者・商品

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
    // 修正後（フォーム送信用に変更）
    Route::post('/favorites/remove/{id}', [FavoriteController::class, 'removeFromPage'])->name('favorites.remove');
    Route::post('/favorites/toggle/{id}', [FavoriteController::class, 'toggle'])->name('favorites.toggle');
    // レビュー投稿
    Route::get('/reviews/{productId}', [ReviewController::class, 'show'])->name('reviews.show');
    Route::post('/reviews/{productId}', [ReviewController::class, 'store'])->name('reviews.store');
    // MyPage用
    Route::get('/mypage', [MypageController::class, 'index'])->name('mypage.index');
    Route::prefix('mypage')->middleware('auth')->group(function () {
        Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
        Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
        Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
        Route::get('/addresses/{address}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
        Route::put('/addresses/{address}', [AddressController::class, 'update'])->name('addresses.update');
        Route::delete('/addresses/{address}', [AddressController::class, 'destroy'])->name('addresses.destroy');
    });
    // プロフィール設定
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    // マイページ用購入履歴
    Route::get('/order/history', [OrderController::class, 'history'])->name('order.history');
});
// 管理者ログイン
Route::prefix('admin')->name('admin.')->group(function () {
    // ログイン関連
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
    // 新規登録（ログイン前でもアクセス可能）
    Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register.submit');
    // 認証後のみアクセス可能
    Route::middleware('auth:admin')->group(function () {
        // 管理者追加画面
        Route::get('/admins/create', [AdminController::class, 'showRegisterForm'])->name('admins.create');
        Route::post('/admins', [AdminController::class, 'register'])->name('admins.store');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('/products', AdminProductController::class);
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
