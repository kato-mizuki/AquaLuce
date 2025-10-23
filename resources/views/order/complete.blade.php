@extends('layouts.app')

@section('content')
<div class="order-complete">
    <h2>ご購入ありがとうございました！</h2>

    <div class="order-info">
        <p><strong>注文番号：</strong> <span>{{ $order->id }}</span></p>
        <p><strong>お名前：</strong> <span>{{ $order->name }}</span></p>
        <p><strong>メールアドレス：</strong> <span>{{ $order->email }}</span></p>
        <p><strong>合計金額：</strong> <span>{{ number_format($order->total_price) }}円</span></p>
        <p><strong>配送先：</strong> <span>{{ $order->address }}</span></p>
    </div>

    <div class="order-status">
        ステータス：{{ $order->status === 'pending' ? '処理中' : $order->status }}
    </div>

    <a href="{{ route('home') }}" class="btn">TOPへ戻る</a>
</div>
@endsection
