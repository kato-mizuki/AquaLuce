@extends('layouts.app')

@section('content')
    <div class="favorites-container">
        <h2>お気に入りリスト</h2>

        @if($products->isEmpty())
            <p>お気に入りに追加された商品はありません。</p>
        @else
            <div class="product-grid">
                @foreach($products as $product)
                    <div class="product">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p>¥{{ number_format($product->price) }}</p>

                        <div class="favorite-actions">
                            <form action="{{ route('favorites.remove', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-remove">お気に入り解除</button>
                            </form>
                            <a href="{{ route('products.show', $product->id) }}" class="btn-detail">商品詳細へ</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
