@extends('layouts.app')

@section('content')
<h2>購入履歴</h2>

@if($orders->count() > 0)
<table class="table">
    <thead>
        <tr>
            <th>購入日</th>
            <th>商品名</th>
            <th>数量</th>
            <th>合計</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            @foreach($order->orderItems as $item)
            <tr>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>¥{{ number_format($item->quantity * $item->product->price) }}</td>
                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary">詳細</a></td>
            </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
@else
<p>購入履歴はありません。</p>
@endif

@endsection
