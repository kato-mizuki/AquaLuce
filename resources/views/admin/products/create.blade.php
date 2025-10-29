<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品追加 | 管理画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-700">商品追加</h1>
        <div>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">戻る</a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">新しい商品を登録</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-700">商品名</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-700">価格（円）</label>
                <input type="number" name="price" value="{{ old('price') }}" class="w-full border rounded p-2 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold text-gray-700">商品説明</label>
                <textarea name="description" rows="4" class="w-full border rounded p-2 focus:ring focus:ring-blue-200">{{ old('description') }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block mb-1 font-semibold text-gray-700">商品画像</label>
                <input type="file" name="image" accept="image/*" onchange="previewImage(event)">
                <div id="preview" class="mt-3">
                    <img id="preview-img" class="hidden w-40 h-40 object-cover rounded border">
                </div>
            </div>

            <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">登録する</button>
        </form>
    </div>

    <script>
        // プレビュー表示
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview-img');
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        }
    </script>

</body>
</html>
