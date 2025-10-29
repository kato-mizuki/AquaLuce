<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'AquaLuce')</title>

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
        <link rel="stylesheet" href="{{ asset('css/order.css') }}">
        <link rel="stylesheet" href="{{ asset('css/favorite.css') }}">
        <link rel="stylesheet" href="{{ asset('css/review.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
        <link rel="stylesheet" href="{{ asset('css/address.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        {{-- ナビゲーション --}}
        <!-- ナビゲーションバー -->
        <header class="navbar">
            <div class="nav-logo">
                <a href="/">AquaLuce</a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                     @guest
                        <!-- 未ログインの場合 -->
                        <li><a href="{{ route('login.form') }}">Login</a></li>
                        <li><a href="{{ route('register.form') }}">Signup</a></li>
                    @endguest

                    @auth
                        <!-- ログイン中の場合 -->
                        <li><a href="{{ route('mypage.index') }}">MyPage</a></li>
                        <li><a href="{{ route('cart.index') }}" id="purchaseBtn">Cart</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-link">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>
        </header>

        {{-- ページ内容 --}}
        <main>
            @yield('content')
        </main>

        {{-- フッター --}}        
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-inner">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Blueveil Logo" class="footer-logo">
                </a>
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

        {{-- JS --}}
        
        <script src="{{ asset('js/java.js') }}"></script>
        <script src="{{ asset('js/cart.js') }}"></script>
    </body>
</html>