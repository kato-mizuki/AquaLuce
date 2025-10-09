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
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('reviews')->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
