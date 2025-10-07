@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
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
                        <td>
                            <img src="{{ asset('img/' . $item['image']) }}" width="80">
                            <p>{{ $item['name'] }}</p>
                        </td>
                        <td>¥{{ number_format($item['price']) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>¥{{ number_format($item['price'] * $item['quantity']) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-remove">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart-total">
            <h3>合計金額: ¥{{ number_format($total) }}</h3>
            <button class="btn-checkout">購入手続きへ</button>
        </div>
    @else
        <p>カートに商品がありません。</p>
    @endif
</div>
@endsection
