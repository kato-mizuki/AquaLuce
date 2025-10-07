<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // ブランドコンセプト：
        // Blueveil ― 海の恵みで、あなたの肌と心に透明な潤いを。
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
            'name' => 'Blueveil Marine Fresh Body Wash',
            'price' => 2800,
            'category' => 'ボディケア',
            'image' => 'bodywash.png',
            'description' => '朝の海風のように、肌を澄ませるバスタイムを。',
        ]);

        Product::create([
            'name' => 'Blueveil Ocean Relax Bath Salt',
            'price' => 2200,
            'category' => 'ボディケア',
            'image' => 'bathsalt.png',
            'description' => '海のミネラルが、心と肌をやさしく包み込む。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Hand Essence',
            'price' => 1600,
            'category' => 'ハンドケア',
            'image' => 'handcream.png',
            'description' => '指先に、透明なうるおいとやわらかな香りを。',
        ]);

        Product::create([
            'name' => 'Blueveil Deep Sea Eye Concentrate',
            'price' => 3200,
            'category' => 'フェイスケア',
            'image' => 'eyecream.png',
            'description' => '深海の潤いが、まなざしに光を宿す。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Lip Essence',
            'price' => 1400,
            'category' => 'リップケア',
            'image' => 'Lip.png',
            'description' => '潤いがとけこむ、海のようなツヤめき唇へ。',
        ]);

        Product::create([
            'name' => 'Blueveil Aqua Smooth Peeling Gel',
            'price' => 2900,
            'category' => 'フェイスケア',
            'image' => 'peelinggel.png',
            'description' => 'くすみをやさしくオフして、波間のような透明肌へ。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Revitalizing Shampoo',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'shampoo.png',
            'description' => '髪に海風の息吹を。フローラルが香る癒しのひととき。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Deep Nourish Conditioner',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'linse.png',
            'description' => '海の恵みで髪を包み、しなやかで艶やかな指通りへ。',
        ]);

        Product::create([
            'name' => 'Blueveil Marine Ocean Relax Bath Oil',
            'price' => 3100,
            'category' => 'ボディケア',
            'image' => 'bathoil.png',
            'description' => '深海の香りに満たされる、静かな癒しのバスタイム。',
        ]);
    }
}
