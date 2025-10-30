@extends('layouts.app')

@section('content')
<div class="product-container">

    <h2 class="text-center mb-4">商品一覧</h2>

    <!-- カテゴリフィルタ（ボタン形式） -->
    <div class="category-filter text-center mb-4">
        <form method="GET" action="{{ route('products.index') }}" class="d-inline">
            <!-- 「すべて」ボタン -->
            <button type="submit" name="category" value="" 
                class="btn {{ $category == '' ? 'btn-primary' : 'btn-outline-primary' }} mx-1 mb-2">
                すべて
            </button>

            <!-- 各カテゴリボタン -->
            @foreach($categories as $cat)
                <button type="submit" name="category" value="{{ $cat }}" 
                    class="btn {{ $category == $cat ? 'btn-primary' : 'btn-outline-primary' }} mx-1 mb-2">
                    {{ $cat }}
                </button>
            @endforeach
        </form>
    </div>

    <!-- 商品一覧 -->
    <div class="product-grid">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>¥{{ number_format($product->price) }}</p>
                <span class="favorite-btn {{ in_array($product->id, $favorites) ? 'favorited' : '' }}"
                    data-id="{{ $product->id }}">
                    <i class="fa fa-heart"></i>
                </span>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">詳細を見る</a>
            </div>
        @endforeach
    </div>

</div>
@endsection
