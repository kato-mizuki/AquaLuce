@extends('layouts.app')

@section('content')
<div class="mypage-container">
    <h2>住所一覧</h2>
    <a href="{{ route('addresses.create') }}" class="btn btn-primary mb-3">新規住所追加</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($addresses->count())
        <table class="table">
            <thead>
                <tr>
                    <th>郵便番号</th>
                    <th>都道府県</th>
                    <th>市区町村</th>
                    <th>番地</th>
                    <th>建物</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($addresses as $address)
                <tr>
                    <td>{{ $address->postal_code }}</td>
                    <td>{{ $address->prefecture }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->address }}</td>
                    <td>{{ $address->building }}</td>
                    <td>
                        <a href="{{ route('addresses.edit', $address) }}" class="btn btn-secondary btn-sm">編集</a>
                        <form action="{{ route('addresses.destroy', $address) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('削除しますか？')">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>登録されている住所はありません。</p>
    @endif
</div>
@endsection
