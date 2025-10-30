<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        // トップページ用
        $products = Product::take(9)->get(); // 上位9商品
        return view('index', compact('products'));
    }

     public function index(Request $request)
    {
        $favorites = session()->get('favorites', []);
        // GETパラメータからカテゴリを取得
        $category = $request->query('category', '');

        // 商品を取得（カテゴリでフィルタリング）
        $query = Product::query();

        if (!empty($category)) {
            $query->where('category', $category);
        }

        $products = $query->get();

        // 登録されているカテゴリ一覧を取得（重複排除）
        $categories = Product::select('category')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        // ビューにデータを渡す
        return view('products.index', compact('products', 'categories', 'category', 'favorites'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        $favorites = session()->get('favorites', []);
        $reviews = $product->reviews()->with('user')->latest()->get();

        // 商品詳細ページ（reviews付き）
        return view('products.show', compact('product', 'favorites', 'reviews'));
    }

}
