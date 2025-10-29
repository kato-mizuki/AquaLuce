<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理者ログイン</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <form action="{{ route('admin.login.submit') }}" method="POST" class="bg-white p-8 rounded-xl shadow w-96">
    @csrf
    <h2 class="text-2xl font-bold mb-6 text-center">管理者ログイン</h2>
    <input type="email" name="email" placeholder="メールアドレス" class="w-full p-2 mb-3 border rounded">
    <input type="password" name="password" placeholder="パスワード" class="w-full p-2 mb-3 border rounded">
    <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">ログイン</button>
    @error('email') <p class="text-red-500 mt-2 text-sm">{{ $message }}</p> @enderror
  </form>
</body>
</html>
