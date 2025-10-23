@extends('layouts.app')

@section('content')
<section class="products">
  <h2>商品一覧</h2>
  <div class="product-grid">
    @foreach($products as $product)
      <div class="product">
        <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
        <h3>{{ $product->name }}</h3>
        <p>¥{{ number_format($product->price) }}</p>
        <div class="btngroup">
          <button type="button" class="favorite-btn {{ in_array($product->id, $favorites) ? 'favorited' : '' }}" data-id="{{ $product->id }}">
            <i class="{{ in_array($product->id, $favorites) ? 'fas' : 'far' }} fa-heart"></i>
          </button>
          <a href="{{ route('products.show', $product->id) }}" class="btn">詳細を見る</a>
        </div>
      </div>
    @endforeach
  </div>
  @yield('scripts')
</section>

@endsection
