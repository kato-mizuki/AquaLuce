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

        return view('favorite.index', compact('products'));
    }

    // Ajaxでお気に入り追加・削除を切り替え
    // お気に入り追加
    public function add($id)
    {
        $favorites = session()->get('favorites', []);
        if (!in_array($id, $favorites)) {
            $favorites[] = $id;
            session(['favorites' => $favorites]);
        }
        return response()->json(['status' => 'added']);
    }

    // お気に入り削除
    public function remove($id)
    {
        $favorites = session()->get('favorites', []);
        if (($key = array_search($id, $favorites)) !== false) {
            unset($favorites[$key]);
            session(['favorites' => array_values($favorites)]);
        }
        return response()->json(['status' => 'removed']);
    }
}
