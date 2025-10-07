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
            'price' => 3800,
            'category' => 'スキンケア',
            'image' => 'lotion.png',
            'description' => 'ひとしずくで、海の潤いをそのまま肌に。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Glow Serum',
            'price' => 5200,
            'category' => 'スキンケア',
            'image' => 'serum.png',
            'description' => '光をまとった、なめらかでハリのある素肌へ。',
        ]);

        Product::create([
            'name' => 'Blueveil Deep Ocean Cream',
            'price' => 4800,
            'category' => 'スキンケア',
            'image' => 'cream.png',
            'description' => '深い海のやすらぎで、翌朝の肌に輝きを。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Pure Cleansing Gel',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'cleansing.png',
            'description' => '肌に優しく、透明感あふれる洗い上がり。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Revital Mask',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'sheetmask.png',
            'description' => '潤いを集中補給。みずみずしい肌に導くフェイスマスク。',
        ]);

        Product::create([
            'name' => 'Blueveil Clear Sea UV Fluid',
            'price' => 3600,
            'category' => 'スキンケア',
            'image' => 'suncut.png',
            'description' => '白浮きせず、透明感のある肌を守る日焼け止め。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Gloss Hair Oil',
            'price' => 2900,
            'category' => 'ヘアケア',
            'image' => 'hairoil.png',
            'description' => '髪に海の輝きとツヤを。さらさらヘアへ。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Rich Body Cream',
            'price' => 3400,
            'category' => 'ボディケア',
            'image' => 'bodycream.png',
            'description' => '濃厚な潤いで、贅沢なボディケア体験を。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Rich Body Cream',
            'price' => 3400,
            'category' => 'バス',
            'image' => 'bodycream.png',
            'description' => '濃厚な潤いで、贅沢なボディケア体験を。',
        ]);

    }
}
