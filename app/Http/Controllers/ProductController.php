<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        // トップページ用
        $products = Product::take(9)->get(); // 上位8商品
        return view('index', compact('products'));
    }

    public function index()
    {
        $products = Product::all();
        // セッションから favorites 配列を取得（なければ空配列）
        $favorites = session()->get('favorites', []);

        // ビューに渡す
        return view('products.index', compact('products', 'favorites'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $favorites = session()->get('favorites', []);
        return view('products.show', compact('product', 'favorites'));
    }
}
