@extends('layouts.app')

@section('content')
<div class="container">
    <h2>プロフィール編集</h2>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>お名前</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
        </div>
        <div class="mb-3">
            <label>メールアドレス</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ route('mypage.index') }}" class="btn btn-secondary">戻る</a>
    </form>
</div>
@endsection
