<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面 | AquaLuce</title>
    <link href="{{ asset('css/admin-pages.css') }}" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- ナビバー -->
    <nav class="navbar">
        <div class="nav-logo"><a href="{{ route('admin.dashboard') }}">AquaLuce 管理画面</a></div>
        <ul class="nav-links">
            <li><a href="{{ route('admin.products.index') }}">商品一覧</a></li>
            <li><a href="{{ route('admin.admins.create') }}" >
                    新規管理者追加
                </a>
            </li>
            <li>
                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="logout-link">ログアウト</button>
                </form>
            </li>
        </ul>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
