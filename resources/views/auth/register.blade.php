@extends('layouts.app')

@section('content')
<div class="container" style="max-width:400px;margin-top:80px;">
    <h2 class="text-center mb-4">新規登録</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">ユーザー名</label>
            <input type="text" name="name" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">パスワード</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">パスワード（確認）</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">登録</button>
    </form>

    <div class="text-center mt-3">
        <a href="{{ route('login.form') }}">既にアカウントをお持ちの方はこちら</a>
    </div>
</div>
@endsection
