<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
