@extends('layouts.app')

@section('title', '新規登録 - AquaLuce')

@section('content')
<main id="register-page">
    <div class="register-container">
        <h2>新規会員登録</h2>

        @if (session('status'))
            <div class="session-status">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="validation-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">名前</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">メールアドレス</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">パスワード</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">パスワード確認</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <button type="submit">登録する</button>
        </form>

        <p>すでにアカウントをお持ちの方は <a href="{{ route('login.form') }}">ログイン</a></p>
    </div>
</main>
@endsection
