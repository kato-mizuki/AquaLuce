@extends('layouts.admin')

@section('content')
<h2 class="mb-4">商品編集</h2>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">商品名</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">価格</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
    </div>

    <div class="mb-3">
        <label class="form-label">画像</label>
        <input type="file" name="image" class="form-control">
        @if($product->image)
            <img src="{{ asset('img/' . $product->image) }}" alt="" width="100" class="mt-2">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">更新する</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">戻る</a>
</form>
@endsection
