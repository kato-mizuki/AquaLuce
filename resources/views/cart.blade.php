@extends('layouts.app')

@section('title', 'カート - AquaLuce')

@section('content')
<section class="cart">
    <h2 class="section-title">Shopping Cart</h2>

    {{-- カートに商品がある場合の例 --}}
    <div class="cart-item">
        <img src="{{ asset('img/lotion.png') }}" alt="Lotion">
        <div class="cart-details">
            <h3>Blueveil Aqua Essence Lotion</h3>
            <p>数量: 1</p>
            <p>価格: ¥3,000</p>
        </div>
        <a href="#" class="btn btn-remove">削除</a>
    </div>

    <div class="cart-summary">
        <p>合計金額: ¥3,000</p>
        <a href="#" class="btn btn-large">購入手続きへ</a>
    </div>
</section>
@endsection
