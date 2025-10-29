@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>住所を追加</h2>

    <!-- バリデーションエラー（Laravelサーバー側） -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('addresses.store') }}" method="POST">
        @csrf
        <div class="form">
            <!-- 自動住所入力ボタン -->
            <div class="mb-3">
                <label for="postal_code" class="form-label">郵便番号</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" value="{{ old('postal_code') }}" required>
                <button type="button" id="auto_fill" class="btn btn-secondary mt-2">郵便番号から自動入力</button>
            </div>

            <div class="mb-3">
                <label for="prefecture" class="form-label">都道府県</label>
                <input type="text" id="prefecture" name="prefecture" class="form-control" value="{{ old('prefecture') }}" required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">市区町村</label>
                <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}" required>
            </div>

            <div class="mb-3">
                <label for="town" class="form-label">町域・番地</label>
                <input type="text" id="town" name="town" class="form-control" value="{{ old('town') }}" required>
            </div>

            <div class="mb-3">
                <label for="building" class="form-label">建物名・部屋番号（任意）</label>
                <input type="text" id="building" name="building" class="form-control" value="{{ old('building') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">住所を追加</button>
        <a href="{{ route('addresses.index') }}" class="btn btn-secondary">キャンセル</a>
    </form>
</div>
@endsection
