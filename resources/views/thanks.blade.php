@extends('layouts.app')

@section('content')
<div class="thanks-container" style="text-align:center; padding:80px 20px;">
    <h1 style="font-size:2.2em; margin-bottom:20px; color:#008CBA;">
        ご購入ありがとうございます！
    </h1>
    <p style="font-size:1.2em; color:#555;">
        ご注文が正常に完了しました。  
        商品の発送準備が整い次第、メールにてご連絡いたします。
    </p>

    <div style="margin-top:40px;">
        <a href="{{ route('index') }}" 
           style="background-color:#008CBA; color:white; padding:12px 30px; border-radius:30px; text-decoration:none; font-weight:bold;">
           トップページへ戻る
        </a>
    </div>
</div>
@endsection
