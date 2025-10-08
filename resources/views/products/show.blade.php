@extends('layouts.app')

@section('content')
<section class="product-detail">
  <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
  <div class="product-info">
    <h2>{{ $product->name }}</h2>
    <p class="price">¥{{ number_format($product->price) }}</p>
    <p class="desc">{{ $product->description }}</p>

    <!-- カート追加フォーム -->
    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
      @csrf
      <div class="quantity-wrapper">
        <label for="quantity">数量：</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1">
      </div>
      <button type="submit" class="btn add-to-cart">カートに入れる</button>
    </form>

    <a href="{{ route('products.index') }}" class="btn back-btn">一覧へ戻る</a>
  </div>
</section>
@endsection
