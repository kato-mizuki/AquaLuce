<?php
namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // 住所一覧
    public function index() {
        $addresses = Address::where('user_id', auth()->id())->get();
        return view('profile.addresses.index', compact('addresses'));
    }

    // 新規作成フォーム
    public function create() {
        return view('profile.addresses.create');
    }

    // 住所追加
    public function store(Request $request) {
        $request->validate([
            'postal_code' => 'required|string|max:10',
            'prefecture'  => 'required|string|max:50',
            'city'        => 'required|string|max:100',
            'address'     => 'required|string|max:255',
            'building'    => 'nullable|string|max:255',
        ]);

        Address::create([
            'user_id'     => auth()->id(),
            'postal_code' => $request->postal_code,
            'prefecture'  => $request->prefecture,
            'city'        => $request->city,
            'address'     => $request->address,
            'building'    => $request->building,
        ]);

        return redirect()->route('addresses.index')->with('success', '住所を追加しました。');
    }

    // 編集フォーム
    public function edit(Address $address) {
        // 所有者チェック
        if ($address->user_id !== auth()->id()) {
            abort(403);
        }

        return view('profile.addresses.edit', compact('address'));
    }

    // 住所更新
    public function update(Request $request, Address $address) {
        if ($address->user_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'postal_code' => 'required|string|max:10',
            'prefecture'  => 'required|string|max:50',
            'city'        => 'required|string|max:100',
            'address'     => 'required|string|max:255',
            'building'    => 'nullable|string|max:255',
        ]);

        $address->update([
            'postal_code' => $request->postal_code,
            'prefecture'  => $request->prefecture,
            'city'        => $request->city,
            'address'     => $request->address,
            'building'    => $request->building,
        ]);

        return redirect()->route('addresses.index')->with('success', '住所を更新しました。');
    }

    // 削除
    public function destroy(Address $address) {
        if ($address->user_id !== auth()->id()) {
            abort(403);
        }

        $address->delete();
        return redirect()->route('addresses.index')->with('success', '住所を削除しました。');
    }
}
