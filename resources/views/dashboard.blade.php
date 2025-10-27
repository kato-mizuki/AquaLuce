@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:80px;">
    <h2>ようこそ、{{ Auth::user()->name }} さん！</h2>
    <form action="{{ route('logout') }}" method="POST" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger">ログアウト</button>
    </form>
</div>
@endsection
