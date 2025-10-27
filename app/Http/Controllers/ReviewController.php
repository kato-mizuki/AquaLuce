<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    // レビュー一覧ページ
    public function show($productId)
    {
        $product = Product::with('reviews')->findOrFail($productId);
        return view('review', compact('product'));
    }

    // 投稿処理
    public function store(Request $request, $productId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        Review::create([
            'product_id' => $productId,
            'user_id' => Auth::id(),  // ← ログイン中のユーザーIDを自動で入れる
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('reviews.show', $productId)
                        ->with('success', 'レビューを投稿しました！');
    }

}
