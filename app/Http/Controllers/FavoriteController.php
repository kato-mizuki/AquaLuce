<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FavoriteController extends Controller
{
    // お気に入り一覧表示
    public function index()
    {
        $favorites = session()->get('favorites', []);
        $products = Product::whereIn('id', $favorites)->get();

        return view('favorites.index', compact('products'));
    }

    // Ajaxでお気に入り追加・削除を切り替え
    public function toggle($productId)
    {
        $favorites = session()->get('favorites', []);

        if (in_array($productId, $favorites)) {
            // すでにお気に入り → 削除
            $favorites = array_diff($favorites, [$productId]);
            session(['favorites' => $favorites]);
            return response()->json(['status' => 'removed']);
        } else {
            // まだお気に入りでない → 追加
            $favorites[] = $productId;
            session(['favorites' => $favorites]);
            return response()->json(['status' => 'added']);
        }
    }
}
