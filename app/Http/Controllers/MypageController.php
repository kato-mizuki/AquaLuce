<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Auth;
    use App\Models\Product;
    use App\Models\Favorite;
    use App\Models\Order;

    class MypageController extends Controller
    {
        public function index()
        {
            $user = Auth::user();

            // お気に入り商品
            $favorites = Favorite::with('product')
                ->where('user_id', $user->id)
                ->get();

            // 購入履歴（最新5件）
            $orders = Order::with('orderItems.product')
                ->where('user_id', $user->id)
                ->latest()
                ->take(5)
                ->get();

            return view('mypage.index', compact('user', 'favorites', 'orders'));
        }
    }
