<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ダッシュボード | 管理画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-700">管理者ダッシュボード</h1>
        <div class="flex gap-2">
            <a href="{{ route('admin.products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">商品管理</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">ログアウト</button>
            </form>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto mt-10 space-y-10">

        <!-- 商品統計 -->
        <section class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">サイト概要</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
                <div class="bg-blue-100 rounded-xl p-4">
                    <p class="text-gray-600 mb-2">登録商品数</p>
                    <p class="text-3xl font-bold text-blue-600">{{ $productCount }}</p>
                </div>
                <div class="bg-green-100 rounded-xl p-4">
                    <p class="text-gray-600 mb-2">管理者名</p>
                    <p class="text-3xl font-bold text-green-600">{{ Auth::guard('admin')->user()->name }}</p>
                </div>
                <div class="bg-yellow-100 rounded-xl p-4">
                    <p class="text-gray-600 mb-2">最終ログイン</p>
                    <p class="text-lg text-yellow-600">{{ now()->format('Y/m/d H:i') }}</p>
                </div>
            </div>
        </section>

        <!-- 最新商品 -->
        <section class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">最近追加された商品</h2>

            @if ($latestProducts->isEmpty())
                <p class="text-gray-500">まだ商品が登録されていません。</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($latestProducts as $product)
                        <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">
                            @if ($product->image)
                                <img src="{{ asset('img/' . $product->image) }}" class="w-full h-40 object-cover rounded mb-3">
                            @else
                                <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded mb-3 text-gray-400">
                                    No Image
                                </div>
                            @endif
                            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                            <p class="text-gray-600">{{ number_format($product->price) }}円</p>
                            <p class="text-sm text-gray-500 mt-1">{{ Str::limit($product->description, 50) }}</p>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="inline-block mt-3 text-blue-500 hover:underline">編集</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </div>

</body>
</html>
