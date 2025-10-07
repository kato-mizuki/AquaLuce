@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    @if(count($cart) > 0)
        <table>
            <thead>
                <tr>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>数量</th>
                    <th>小計</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td><img src="{{ $item['image'] }}" width="80"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>¥{{ number_format($item['price']) }}</td>
                        <td>
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <button type="submit">更新</button>
                            </form>
                        </td>
                        <td>¥{{ number_format($item['price'] * $item['quantity']) }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <button type="submit">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>合計金額：¥{{ number_format($total) }}</h3>
    @else
        <p>カートに商品がありません。</p>
    @endif
</div>
@endsection
