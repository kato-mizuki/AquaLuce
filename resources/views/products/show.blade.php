@extends('layouts.app')

@section('content')
<section class="product-detail">
  <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
  <div class="product-info">
    <h2>{{ $product->name }}</h2>
    <p class="price">¥{{ number_format($product->price) }}</p>
    <p class="desc">{{ $product->description }}</p>
    <a href="{{ route('products.index') }}" class="btn">一覧へ戻る</a>
  </div>
</section>
@endsection
