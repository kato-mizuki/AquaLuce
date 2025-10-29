@extends('layouts.admin')

@section('content')
<h2 class="mb-4">新規商品追加</h2>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">商品名<span style="color: red;">*</span></label>
        <input type="text" name="name" class="form-control" placeholder="商品名を入力" required>
    </div>

    <div class="mb-3">
        <label class="form-label">価格<span style="color: red;">*</span></label>
        <input type="number" name="price" class="form-control" placeholder="価格を入力" required>
    </div>

    <div class="mb-3">
        <label class="form-label">画像<span style="color: red;">*</span></label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">追加する</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">戻る</a>
</form>
@endsection
