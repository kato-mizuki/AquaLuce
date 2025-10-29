@extends('layouts.admin')

@section('content')
<h2>管理者新規登録</h2>

<form action="{{ route('admin.register.submit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>名前</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>メールアドレス</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>パスワード</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>パスワード確認</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">登録</button>
    <a href="{{ route('admin.login') }}" class="btn btn-secondary">ログイン画面へ戻る</a>
</form>
@endsection
