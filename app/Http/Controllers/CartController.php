<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // ダミー商品データ（本来はDBなどから取得）
    private $products = [
        1 => ['name' => 'AquaLuce スキンケアローション', 'price' => 2800],
        2 => ['name' => 'AquaLuce モイスチャークリーム', 'price' => 3400],
        3 => ['name' => 'AquaLuce クレンジングジェル', 'price' => 2200],
    ];

    // 商品一覧表示
    public function showProducts()
    {
        return view('products', ['products' => $this->products]);
    }

    // カートに追加
    public function addToCart(Request $request)
    {
        $id = $request->input('id');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $product = $this->products[$id];
            $cart[$id] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', '商品をカートに追加しました。');
    }

    // カート内容表示
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        return view('cart', compact('cart', 'total'));
    }

    // 商品をカートから削除
    public function removeFromCart(Request $request)
    {
        $id = $request->input('id');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', '商品を削除しました。');
    }
}
