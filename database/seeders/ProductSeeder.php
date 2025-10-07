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
            'name' => 'AquaLuce モイスチャーローション',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'lotion.jpg',
            'description' => '肌にうるおいを与え、透明感を引き出す化粧水。',
        ]);

        Product::create([
            'name' => 'AquaLuce クレンジングジェル',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'cleansing.jpg',
            'description' => 'メイクや汚れをやさしく落とすジェルタイプのクレンジング。',
        ]);
    }
}
