@extends('layouts.app')

@section('title', '商品一覧 - AquaLuce')

@section('content')
<section class="products">
    <h2 class="section-title">Our Products</h2>
    <div class="product-cards">
        <div class="product-card">
            <img src="{{ asset('img/lotion.png') }}" alt="Lotion">
            <h3>Blueveil Aqua Essence Lotion</h3>
            <p>ひとしずくで、海の潤いをそのままに。</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('img/serum.png') }}" alt="Serum">
            <h3>Blueveil Marine Glow Serum</h3>
            <p>光をまとう、なめらかな素肌へ。</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('img/cream.png') }}" alt="Cream">
            <h3>Blueveil Deep Ocean Cream</h3>
            <p>深い海のやすらぎで、翌朝の肌に違いを。</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
    </div>
</section>
@endsection
