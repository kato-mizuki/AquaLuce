@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="logo">AquaLuce</h1>
            <p class="tagline">水と光が織りなす、透明感あふれる素肌へ</p>
            <a href="{{ route('products.index') }}" class="btn main-btn">Shop Now</a>
        </div>
    </section>

    <div class="nami">
        <img src="{{ asset('img/hakei.png') }}" alt="波紋">
    </div>

    <!-- Products Section -->
    <section id="products" class="products">
        <h2 class="section-title">Our Products</h2>
        <div class="product-slider">
            <button class="prev-btn">‹</button>
            <div class="product-cards">
                <!-- ここからループ開始 -->
                @foreach($products as $product)
                    <div class="product-card">
                        <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <form action="{{ route('products.index') }}" method="get">
                            @csrf
                            <button type="submit" class="btn">products view</button>
                        </form>
                    </div>
                @endforeach
                <!-- ここでループ終了 -->
            </div>
            <button class="next-btn">›</button>
        </div>
    </section>


    <!-- Before / After Section -->
    <section class="before-after">
        <h2 class="section-title">Before & After</h2>
        <div class="ba-container">
            <div class="ba-card">
                <h3>Before</h3>
                <img src="{{ asset('img/before.png') }}" alt="Before Skin">
            </div>
            <div class="ba-card">
                <h3>After</h3>
                <img src="{{ asset('img/after.png') }}" alt="After Skin">
            </div>
        </div>

        <div class="effect-icons">
            <div class="effect-item">
                <i class="fa-solid fa-droplet"></i>
                <p>保湿</p>
            </div>
            <div class="effect-item">
                <i class="fa-solid fa-sparkles"></i>
                <p>透明感</p>
            </div>
            <div class="effect-item">
                <i class="fa-solid fa-leaf"></i>
                <p>ハリ</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2 class="section-title">Customer Reviews</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <img src="{{ asset('img/customer1.png') }}" alt="Customer 1">
                <p class="review">「使った翌朝の肌の透明感に驚きました！」</p>
                <span class="customer-name">Mika, 28</span>
            </div>
            <div class="testimonial-card">
                <img src="{{ asset('img/customer2.png') }}" alt="Customer 2">
                <p class="review">「しっとり感が続いて、肌が柔らかくなった気がします。」</p>
                <span class="customer-name">Yuki, 32</span>
            </div>
            <div class="testimonial-card">
                <img src="{{ asset('img/customer3.png') }}" alt="Customer 3">
                <p class="review">「ラグジュアリーな使い心地で毎日が楽しみです。」</p>
                <span class="customer-name">Aoi, 25</span>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Discover Your Glow</h2>
        <p>今すぐ Blueveil の透明感あふれるスキンケアを体験しましょう。</p>
        <a href="#products" class="btn btn-large">Shop Now</a>
    </section>

@endsection
