@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h2 class="cart-title">ショッピングカート</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <div class="cart-table-wrapper">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>商品</th>
                        <th>価格</th>
                        <th>数量</th>
                        <th>小計</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $id => $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <tr>
                            <td class="product-info">
                                <img src="{{ asset('img/' . $item['image']) }}" alt="{{ $item['name'] }}" class="product-img">
                                <span class="product-name">{{ $item['name'] }}</span>
                            </td>
                            <td>¥{{ number_format($item['price']) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>¥{{ number_format($item['price'] * $item['quantity']) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-remove">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="cart-summary">
            <h3>合計金額: <span class="total-price">¥{{ number_format($total) }}</span></h3>
            <button class="btn btn-checkout">購入手続きへ</button>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-back">お買い物を続ける</a>
    @else
        <p class="empty-cart">カートに商品がありません。</p>
    @endif
</div>
@endsection
