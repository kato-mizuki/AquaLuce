@extends('layouts.app')

@section('content')
<div class="checkout-container">
    <h2>ご注文情報の入力</h2>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">お名前</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">電話番号</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>

        <div class="mb-3 row align-items-center">
            <label for="postal_code" class="col-form-label col-auto me-2">郵便番号</label>
            <div class="col d-flex align-items-center gap-2 flex-wrap">
                <input type="text" id="postal_code" name="postal_code" class="form-control" style="width: 150px;">
                <button type="button" id="auto_fill" class="btn-primary text-nowrap">住所自動入力</button>
            </div>
        </div>


        <div class="mb-3">
            <label class="form-label">都道府県</label>
            <input type="text" id="prefecture" name="prefecture" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">市区町村</label>
            <input type="text" id="city" name="city" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">町域・番地</label>
            <input type="text" id="town" name="town" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">建物名</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>

        <h4 class="mt-5">ご注文内容</h4>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>商品名</th>
                    <th>単価</th>
                    <th>数量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td><img src="{{ asset('img/' . $item['image']) }}" alt="{{ $item['name'] }}" class="product-img"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>¥{{ number_format($item['price']) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>¥{{ number_format($item['price'] * $item['quantity']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="fw-bold">
            合計金額：¥{{ number_format($total) }}
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="btn btn-back">TOPページに戻る</a>
            <button type="submit" class="btn btn-success">注文を確定する</button>
        </div>
    </form>
</div>
@endsection
