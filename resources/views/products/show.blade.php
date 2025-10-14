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
          </div>

          <div class="action-area">
            <button type="submit" class="btn add-to-cart">カートに入れる</button>
          </div>
        </form>

        <a href="{{ route('products.index') }}" class="btn back-btn">一覧へ戻る</a>
      </div>
    </div>
  </section>
<!-- レビュー -->
<div class="reviews">
  <h3>レビュー</h3>
  @if ($product->reviews->count() > 0)
    @foreach ($product->reviews as $review)
      <div class="review-card">
        <div class="review-header">
          <strong class="reviewer">{{ $review->reviewer_name }}</strong>
          <div class="rating">
            @for ($i = 0; $i < 5; $i++)
              @if ($i < $review->rating)
                <span class="star filled">★</span>
              @else
                <span class="star">☆</span>
              @endif
            @endfor
          </div>
        </div>
        <p class="review-comment">{{ $review->comment }}</p>
      </div>
    @endforeach
  @else
    <p>まだレビューはありません。</p>
  @endif
</div>
@endsection
