<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => '管理者',
            'email' => 'example@gmail.com',
            'password' => Hash::make('test'), // 任意のパスワード
        ]);
    }
}