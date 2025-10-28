@extends('layouts.app')

@section('content')
<div class="mypage-container">

    <h2>マイページ</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- ユーザー情報 -->
    <div class="user-info mb-5">
        <p><strong>お名前：</strong> {{ $user->name }}</p>
        <p><strong>メールアドレス：</strong> {{ $user->email }}</p>
        <a href="{{ route('profile.edit') }}" class="btn btn-outline-success mt-2">プロフィール編集</a>
    </div>

    <!-- お気に入りへのリンク -->
    <div class="mb-4">
        <h3>お気に入り</h3>
        <a href="{{ route('favorites.index') }}" class="btn btn-primary">お気に入りを見る</a>
    </div>

    <!-- 購入履歴へのリンク -->
    <div class="mb-4">
        <h3>購入履歴</h3>
        <a href="{{ route('order.history') }}" class="btn btn-primary">購入履歴を見る</a>
    </div>
</div>
@endsection
