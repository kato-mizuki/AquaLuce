<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Breeze 環境では $user は Eloquent モデルなので直接更新可能
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        return redirect()->route('mypage.index')->with('success', 'プロフィールを更新しました');
    }
}
