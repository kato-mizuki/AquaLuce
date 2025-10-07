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
                <div class="product-card">
                    <img src="{{ asset('img/lotion.png') }}" alt="Aqua Essence Lotion">
                    <h3>Blueveil Aqua Essence Lotion</h3>
                    <p>ひとしずくで、海の潤いをそのままに。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/serum.png') }}" alt="Marine Glow Serum">
                    <h3>Blueveil Marine Glow Serum</h3>
                    <p>光をまとう、なめらかな素肌へ。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/cream.png') }}" alt="Deep Ocean Cream">
                    <h3>Blueveil Deep Ocean Cream</h3>
                    <p>深い海のやすらぎで、翌朝の肌に違いを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/cleansing.png') }}" alt="Pure Cleansing Gel">
                    <h3>Blueveil Aqua Pure Cleansing Gel</h3>
                    <p>洗浄後の肌に清潔感や透明感を。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/sheetmask.png') }}" alt="Aqua Revital Mask">
                    <h3>Blueveil Aqua Revital Mask</h3>
                    <p>肌に集中ケアで潤いと活力を与える。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/suncut.png') }}" alt="Clear Sea UV Fluid">
                    <h3>Blueveil Clear Sea UV Fluid</h3>
                    <p>白浮きせず透明感のある仕上がりを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/hairoil.png') }}" alt="Marine Gloss Hair Oil">
                    <h3>Blueveil Marine Gloss Hair Oil</h3>
                    <p>髪に輝くツヤを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/bodycream.png') }}" alt="Aqua Rich Body Cream">
                    <h3>Blueveil Aqua Rich Body Cream</h3>
                    <p>濃厚な潤いや贅沢な使用感を。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/bodywash.png') }}" alt="Marine Fresh Body Wash">
                    <h3>Blueveil Marine Fresh Body Wash</h3>
                    <p>スタイムから始まる全身の潤いケアを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/bathsalt.png') }}" alt="Ocean Relax Bath Salt">
                    <h3>Blueveil Ocean Relax Bath Salt</h3>
                    <p>海由来の成分で贅沢なバスタイムを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/handcream.png') }}" alt="Aqua Hand Essence">
                    <h3>Blueveil Aqua Hand Essence</h3>
                    <p>日常にアクセントを。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/eyecream.png') }}" alt="Deep Sea Eye Concentrate">
                    <h3>Blueveil Deep Sea Eye Concentrate</h3>
                    <p>目元のデリケートな肌に。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/Lip.png') }}" alt="Marine Lip Essence">
                    <h3>Blueveil Marine Lip Essence</h3>
                    <p>唇の保湿ケアに。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/peelinggel.png') }}" alt="Aqua Smooth Peeling Gel">
                    <h3>Blueveil Aqua Smooth Peeling Gel</h3>
                    <p>肌のターンオーバーを促進し、透明感を高める。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/shampoo.png') }}" alt="Marine Revitalizing Shampoo">
                    <h3>Blueveil Marine Revitalizing Shampoo</h3>
                    <p>穏やかな海の香りと可憐なフローラルが溶け合う香りで、バスタイムを至福のリラックスタイムに。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/linse.png') }}" alt="Marine Deep Nourish Conditioner">
                    <h3>Blueveil Marine Deep Nourish Conditioner</h3>
                    <p>傷んだ髪の内部に深く浸透し、髪一本一本を集中補修します。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/bathoil.png') }}" alt="Ocean Relax Bath Oil">
                    <h3>Blueveil Marine Ocean Relax Bath Oil</h3>
                    <p>海辺のスパにいるような極上のリラックス空間を。</p>
                    <a href="{{ route('products.index') }}" class="btn">Buy Now</a>
                </div>
                <button class="next-btn">›</button>
            </div>
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

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-inner">
            <img src="{{ asset('img/logo.png') }}" alt="Blueveil Logo" class="footer-logo">
            <ul class="footer-info">
                <li>営業時間<br>10:00 ~ 19:00</li>
                <li>所在地<br>東京都港区青山x-x-x</li>
                <li>TEL<br>03-xxxx-xxxx</li>
                <li>Mail<br>info@blueveil.com</li>
            </ul>
            <div class="footer-sns">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
            </div>
        </div>
        <small class="copyright">© 2025 Blueveil. All Rights Reserved.</small>
    </footer>
@endsection
