<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //カート一覧
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    //カートに追加
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', '商品をカートに追加しました！');
    }

    //カートから削除
    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', '商品をカートから削除しました');
    }

    //【追加】数量変更を反映する（AJAX）
    public function updateQuantity(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->input('id');
        $quantity = (int) $request->input('quantity');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, $quantity); // 最低1個に制限
            session()->put('cart', $cart);
        }

        //合計計算
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return response()->json([
            'success' => true,
            'subtotal' => $cart[$id]['price'] * $cart[$id]['quantity'],
            'total' => $total
        ]);
    }

    //【追加】購入処理（カートクリア）
    public function purchase(Request $request)
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }
}
