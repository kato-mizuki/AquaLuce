@extends('layouts.admin')

@section('content')
<div class="title">
  <h2 class="mb-4">商品一覧</h2>
  <div class="btn">
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-4">新規商品追加</a>
  </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>価格</th>
            <th>画像</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>¥{{ number_format($product->price) }}</td>
            <td>
                @if ($product->image)
                    <img src="{{ asset('img/' . $product->image) }}" alt="" width="60">
                @endif
            </td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">編集</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        data-id="{{ $product->id }}"
                        data-name="{{ $product->name }}">
                    削除
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- 削除確認モーダル -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">削除確認</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong id="productName"></strong> を削除しますか？</p>
      </div>
      <div class="modal-footer">
        <form id="deleteForm" method="POST" action="">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
            <button type="submit" class="btn btn-danger">削除する</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
const deleteModal = document.getElementById('deleteModal');
deleteModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const id = button.getAttribute('data-id');
    const name = button.getAttribute('data-name');
    const productName = deleteModal.querySelector('#productName');
    const deleteForm = deleteModal.querySelector('#deleteForm');

    productName.textContent = name;
    deleteForm.action = `/admin/products/${id}`;
});
</script>
@endsection
