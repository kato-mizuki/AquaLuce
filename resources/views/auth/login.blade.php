@extends('layouts.app')

@section('title', 'ログイン - AquaLuce')

@section('content')
<main id="login-page">
    <div class="login-container">
        <h2>ログイン</h2>

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

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">メールアドレス</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">パスワード</label>
            <input id="password" type="password" name="password" required>

            <label>
                <input type="checkbox" name="remember"> ログイン状態を保持
            </label>

            <button type="submit">ログイン</button>
        </form>

        <p>アカウントがない方は <a href="{{ route('register.form') }}">新規登録</a></p>
    </div>
</main>
@endsection
