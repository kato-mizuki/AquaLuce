@extends('layouts.app')

@section('content')
<section class="product-detail">
  <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
  <div class="product-info">

    <!-- 上段：商品名と金額 -->
    <div class="product-header">
      <h2>{{ $product->name }}</h2>
      <p class="price">¥{{ number_format($product->price) }}</p>
    </div>

    <!-- 下段：説明と数量＋ボタン -->
    <div class="product-lower">
      <p class="desc">{{ $product->description }}</p>

      <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST" class="cart-form">
        @csrf
        <div class="quantity-wrapper">
          <label for="quantity">数量：</label>
          <input type="number" name="quantity" id="quantity" value="1" min="1">
          <button type="button" class="favorite-btn {{ in_array($product->id, $favorites) ? 'favorited' : '' }}" data-id="{{ $product->id }}">
            <i class="{{ in_array($product->id, $favorites) ? 'fas' : 'far' }} fa-heart"></i>
          </button>
        </div>
        <div class="action-area">
          <button type="submit" class="btn add-to-cart">カートに入れる</button>
        </div>
      </form>

      <a href="{{ route('products.index') }}" class="btn back-btn">一覧へ戻る</a>
    </div>
  </div>
</section>

<!-- レビュー概要 -->
<div class="reviews">
  <h3>レビュー</h3>

  @php
    $latestReviews = $product->reviews->sortByDesc('created_at')->take(3);
  @endphp

  @if ($latestReviews->count() > 0)
    @foreach ($latestReviews as $review)
      <div class="review-card">
        <div class="review-header">
          <strong>{{ $review->user->name }}</strong>
          <div class="rating">
            @for ($i = 1; $i <= 5; $i++)
              <span class="star {{ $i <= $review->rating ? 'filled' : '' }}">★</span>
            @endfor
          </div>
        </div>
        <p class="review-comment">{{ $review->comment }}</p>
      </div>
    @endforeach
  @else
    <p class="no-review">まだレビューはありません。</p>
  @endif

  <div class="see-all-container">
    <a href="{{ route('reviews.show', $product->id) }}" class="btn see-all">
      すべてのレビューを見る
    </a>
  </div>
</div>
@endsection
