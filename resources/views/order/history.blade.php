@extends('layouts.app')

@section('content')
<div class="orders-container">
    <h2 class="text-center mb-4">注文履歴</h2>

    @if($orders->count() > 0)
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">購入日</th>
                    <th scope="col">商品名</th>
                    <th scope="col">数量</th>
                    <th scope="col">合計金額</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    @foreach($order->orderItems as $item)
                    <tr>
                        <td>{{ $order->created_at->format('Y年m月d日') }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>¥{{ number_format($item->quantity * $item->product->price) }}</td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <div class="text-center mt-5">
            <p class="text-muted">購入履歴はまだありません。</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">商品を見に行く</a>
        </div>
    @endif
</div>
@endsection
