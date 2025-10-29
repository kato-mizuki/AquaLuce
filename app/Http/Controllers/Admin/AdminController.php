<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'ログイン情報が正しくありません。']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function dashboard()
    {
        $productCount = \App\Models\Product::count();
        $latestProducts = \App\Models\Product::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('productCount', 'latestProducts'));
    }

}
