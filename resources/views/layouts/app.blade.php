<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'AquaLuce')</title>

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        {{-- ナビゲーション --}}
        <!-- ナビゲーションバー -->
        <header class="navbar">
            <div class="nav-logo">AquaLuce</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('cart.view') }}">Cart</a></li>
                </ul>
            </nav>
        </header>

        {{-- ページ内容 --}}
        <main>
            @yield('content')
        </main>

        {{-- フッター --}}
        <footer class="footer">
            <div class="footer-inner">
                <p>© 2025 AquaLuce. All Rights Reserved.</p>
            </div>
        </footer>

        {{-- JS --}}
        <script src="{{ asset('js/java.js') }}"></script>
    </body>
</html>
