@extends('layouts.admin')

@section('content')
<div class="title">
    <h2 class="mb-4">管理者ダッシュボード</h2>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h4>登録商品数</h4>
            <p class="display-6">{{ $productCount }}</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <h4>最近追加された商品</h4>
            <ul class="list-group">
                @foreach($latestProducts as $product)
                    <li class="list-group-item">{{ $product->name }} - ¥{{ number_format($product->price) }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="card mt-4">
    <h4>売上グラフ（ダミーデータ）</h4>
    <canvas id="salesChart" height="300"></canvas>
</div>

<script>
const ctx = document.getElementById('salesChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1月','2月','3月','4月','5月','6月'],
        datasets: [{
            label: '売上（万円）',
            data: [12,19,3,5,2,8],
            backgroundColor: '#00A8E8',
            borderColor: '#006C91',
            borderWidth: 1
        }]
    },
    options: { scales: { y: { beginAtZero: true } } }
});
</script>
@endsection
