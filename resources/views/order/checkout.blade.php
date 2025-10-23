@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">ご注文情報の入力</h2>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">お名前</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">電話番号</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">郵便番号</label>
            <input type="text" name="postal_code" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">住所</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>

        <h4 class="mt-5">ご注文内容</h4>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>商品名</th>
                    <th>単価</th>
                    <th>数量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>¥{{ number_format($item['price']) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>¥{{ number_format($item['price'] * $item['quantity']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end fw-bold mt-3">
            合計金額：¥{{ number_format($total) }}
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-success px-4 py-2">注文を確定する</button>
        </div>
    </form>
</div>
@endsection
