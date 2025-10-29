<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品一覧 | 管理画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-700">管理者ダッシュボード</h1>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">ログアウト</button>
        </form>
    </nav>

    <div class="max-w-5xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">商品一覧</h2>
            <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                ＋ 新規商品追加
            </a>
        </div>

        @if (session('success'))
            <p class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </p>
        @endif

        @if ($products->isEmpty())
            <p class="text-gray-600 text-center py-10">現在登録されている商品はありません。</p>
        @else
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="p-3 border-b">ID</th>
                        <th class="p-3 border-b">画像</th>
                        <th class="p-3 border-b">商品名</th>
                        <th class="p-3 border-b">価格</th>
                        <th class="p-3 border-b">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border-b">{{ $product->id }}</td>
                            <td class="p-3 border-b">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="" class="w-16 h-16 object-cover rounded">
                                @else
                                    <span class="text-gray-400">なし</span>
                                @endif
                            </td>
                            <td class="p-3 border-b">{{ $product->name }}</td>
                            <td class="p-3 border-b">{{ number_format($product->price) }}円</td>
                            <td class="p-3 border-b">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:underline mr-3">編集</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('削除してもよろしいですか？');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
