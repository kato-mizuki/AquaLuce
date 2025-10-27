<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    // __construct() を削除（またはコメントアウト）

    public function store(Request $request, $productId)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'content' => $request->content,
        ]);

        return back()->with('success', 'レビューを投稿しました');
    }
}
