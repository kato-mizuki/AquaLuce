@extends('layouts.app')

@section('content')
<div class="review-page">
    <div class="review-container">
        <h2>{{ $product->name }} のレビュー</h2>

        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        {{-- レビュー投稿フォーム --}}
        <form action="{{ route('reviews.store', $product->id) }}" method="POST" class="review-form">
            @csrf

            {{-- 星評価 --}}
            <div class="rating-stars">
                <label>評価：</label>
                <div class="stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <strong class="star" data-value="{{ $i }}">☆</strong>
                    @endfor
                </div>
                <input type="hidden" name="rating" id="rating" required>
            </div>

            {{-- コメント --}}
            <div class="comment-field">
                <label>コメント：</label>
                <textarea name="comment" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn submit-btn">レビューを投稿</button>
        </form>

        <hr>

        {{-- 投稿済みレビュー一覧 --}}
        <h3>投稿されたレビュー</h3>
        @forelse ($product->reviews->sortByDesc('created_at') as $review)
            <div class="review-card">
                <strong>{{ $review->user->name }}</strong>
                <span class="stars-display">{!! str_repeat('★', $review->rating) !!}</span>
                <p>{{ $review->comment }}</p>
                <small>{{ $review->created_at->format('Y-m-d H:i') }}</small>
            </div>
        @empty
            <p>まだレビューはありません。</p>
        @endforelse

        <a href="{{ route('products.show', $product->id) }}" class="btn back-btn">商品詳細へ戻る</a>
    </div>
</div>
@endsection