@extends('layouts.app')

@section('title', $product->name . ' のレビュー')

@section('content')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">

<div class="review-container">
    <div class="review-header">
        <h1>{{ $product->name }} のレビュー</h1>
        <a href="{{ route('products.show', $product->id) }}" class="back-btn">← 商品ページへ戻る</a>
    </div>

    {{-- 成功メッセージ --}}
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    {{-- 投稿フォーム --}}
    @auth
        <form action="{{ route('review.store', $product->id) }}" method="POST" class="review-form">
            @csrf
            <textarea name="content" placeholder="レビューを入力してください" required></textarea>
            <button type="submit" class="review-btn">投稿する</button>
        </form>
    @else
        <p class="login-prompt">
            <a href="{{ route('login.form') }}">ログイン</a>するとレビューを投稿できます。
        </p>
    @endauth

    {{-- レビュー一覧 --}}
    <div class="review-list">
        <h2>みんなのレビュー</h2>
        @forelse ($reviews as $review)
            <div class="review-item">
                <div class="review-meta">
                    <strong>{{ $review->user->name ?? '匿名ユーザー' }}</strong>
                    <span class="review-date">{{ $review->created_at->format('Y/m/d H:i') }}</span>
                </div>
                <p class="review-content">{{ $review->content }}</p>
            </div>
        @empty
            <p class="no-review">まだレビューはありません。</p>
        @endforelse
    </div>
</div>
@endsection
