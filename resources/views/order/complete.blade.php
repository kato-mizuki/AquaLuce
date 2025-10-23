@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h2 class="mb-3">ご注文ありがとうございました！</h2>
    <p>注文番号：<strong>{{ $order->id }}</strong></p>
    <p>合計金額：<strong>¥{{ number_format($order->total_price) }}</strong></p>
    <p class="mt-4"><a href="{{ url('/') }}" class="btn btn-outline-primary">トップページに戻る</a></p>
</div>
@endsection
