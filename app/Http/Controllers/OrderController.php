<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * 注文情報入力ページ
     */
    public function checkout()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'カートが空です。');
        }

        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        return view('order.checkout', compact('cart', 'total'));
    }

    /**
     * 注文登録処理
     */
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'カートが空です。');
        }

        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'email'       => 'required|email|max:100',
            'phone'       => 'required|string|max:20',
            'postal_code' => 'required|string|max:10',
            'address'     => 'required|string|max:255',
        ]);

        $total_price = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        // 注文作成（ログイン機能なし → user_idは常にnull）
        $order = Order::create([
            'user_id'     => null,
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'phone'       => $validated['phone'],
            'postal_code' => $validated['postal_code'],
            'address'     => $validated['address'],
            'total_price' => $total_price,
            'status'      => 'pending',
        ]);

        // 注文詳細を登録
        foreach ($cart as $id => $item) {
            OrderItem::create([
                'order_id'  => $order->id,
                'product_id'=> $id,
                'quantity'  => $item['quantity'],
                'unit_price'=> $item['price'],
            ]);
        }

        // カートをクリア
        session()->forget('cart');

        return view('order.complete', compact('order'));
    }
    public function history()
    {
        $user = Auth::user();

        $orders = Order::with('orderItems.product')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return view('order.history', compact('orders'));
    }
}