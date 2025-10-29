@extends('layouts.admin')

@section('content')
<h2>新規管理者追加</h2>

<form action="{{ route('admin.admins.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">名前</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">メールアドレス</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">パスワード</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">パスワード確認</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">追加する</button>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">戻る</a>
</form>
@endsection
