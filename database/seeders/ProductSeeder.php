<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Blueveil Aqua Essence Lotion',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'lotion.png',
            'description' => '肌にうるおいを与え、透明感を引き出す化粧水。',
        ]);

        Product::create([
            'name' => 'AquaLuce クレンジングジェル',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'cleansing.png',
            'description' => 'メイクや汚れをやさしく落とすジェルタイプのクレンジング。',
        ]);
    }
}
