<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
        <title>AquaLuce</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
            <h1 class="logo">AquaLuce</h1>
            <p class="tagline">水と光が織りなす、透明感あふれる素肌へ</p>
            <a href="#products" class="btn">Shop Now</a>
            </div>
        </section>
        <!-- Products Section -->
        <section id="products" class="products">
            <h2 class="section-title">Our Products</h2>
            <div class="product-cards">
                <!-- 化粧水 -->
                <div class="product-card">
                <img src="img/lotion.png" alt="Aqua Essence Lotion">
                <h3>Blueveil Aqua Essence Lotion</h3>
                <p>ひとしずくで、海の潤いをそのままに。</p>
                <a href="#" class="btn">Buy Now</a>
                </div>
                <!-- 美容液 -->
                <div class="product-card">
                <img src="img/serum.png" alt="Marine Glow Serum">
                <h3>Blueveil Marine Glow Serum</h3>
                <p>光をまとう、なめらかな素肌へ。</p>
                <a href="#" class="btn">Buy Now</a>
                </div>
                <!-- クリーム -->
                <div class="product-card">
                <img src="img/cream.png" alt="Deep Ocean Cream">
                <h3>Blueveil Deep Ocean Cream</h3>
                <p>深い海のやすらぎで、翌朝の肌に違いを。</p>
                <a href="#" class="btn">Buy Now</a>
                </div>
            </div>
        </section>
        <!-- Before / After Section -->
        <section class="before-after">
            <h2 class="section-title">Before & After</h2>
            <div class="ba-container">
                <!-- Before -->
                <div class="ba-card">
                <h3>Before</h3>
                <img src="img/before.jpg" alt="Before Skin">
                </div>
                <!-- After -->
                <div class="ba-card">
                <h3>After</h3>
                <img src="img/after.jpg" alt="After Skin">
                </div>
            </div>

            <!-- 効果アイコン -->
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
                <!-- レビュー1 -->
                <div class="testimonial-card">
                <img src="img/customer1.jpg" alt="Customer 1">
                <p class="review">「使った翌朝の肌の透明感に驚きました！」</p>
                <span class="customer-name">Mika, 28</span>
                </div>
                <!-- レビュー2 -->
                <div class="testimonial-card">
                <img src="img/customer2.jpg" alt="Customer 2">
                <p class="review">「しっとり感が続いて、肌が柔らかくなった気がします。」</p>
                <span class="customer-name">Yuki, 32</span>
                </div>
                <!-- レビュー3 -->
                <div class="testimonial-card">
                <img src="img/customer3.jpg" alt="Customer 3">
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
            <img src="img/logo_footer.png" alt="Blueveil Logo" class="footer-logo">
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
    </body>
</html>