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
        // ===============================
        // 🌊 スキンケア
        // ===============================
        // 化粧水
        Product::create([
            'name' => 'Blueveil Aqua Essence Lotion',
            'price' => 3800,
            'category' => 'スキンケア',
            'image' => 'skincare/lotion.png',
            'description' => 'ひとしずくで、海の潤いをそのまま肌に。',
        ]);
        // 美容液
        Product::create([
            'name' => 'Blueveil Marine Glow Serum',
            'price' => 5200,
            'category' => 'スキンケア',
            'image' => 'skincare/serum.png',
            'description' => '光をまとった、なめらかでハリのある素肌へ。',
        ]);
        // クリーム
        Product::create([
            'name' => 'Blueveil Deep Ocean Cream',
            'price' => 4800,
            'category' => 'スキンケア',
            'image' => 'skincare/cream.png',
            'description' => '深い海のやすらぎで、翌朝の肌に輝きを。',
        ]);
        // クレンジングジェル
        Product::create([
            'name' => 'Blueveil Aqua Pure Cleansing Gel',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'skincare/cleansing.png',
            'description' => '肌に優しく、透明感あふれる洗い上がり。',
        ]);
        // シートパック
        Product::create([
            'name' => 'Blueveil Aqua Revital Mask',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'skincare/sheetmask.png',
            'description' => '潤いを集中補給。みずみずしい肌に導くフェイスマスク。',
        ]);
        // 日焼け止め
        Product::create([
            'name' => 'Blueveil Clear Sea UV Fluid',
            'price' => 3600,
            'category' => 'スキンケア',
            'image' => 'skincare/suncut.png',
            'description' => '白浮きせず、透明感のある肌を守る日焼け止め。',
        ]);
        // アイクリーム
        Product::create([
            'name' => 'Blueveil Deep Sea Eye Concentrate',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'skincare/eyecream.png',
            'description' => '深海の潤いが、まなざしに光を宿す。',
        ]);
        // ピーリングジェル
        Product::create([
            'name' => 'Blueveil Aqua Smooth Peeling Gel',
            'price' => 2900,
            'category' => 'スキンケア',
            'image' => 'skincare/peelinggel.png',
            'description' => 'くすみをやさしくオフして、波間のような透明肌へ。',
        ]);
        // 化粧ミスト
        Product::create([
            'name' => 'Blueveil Ocean Mist Hydrator',
            'price' => 3100,
            'category' => 'スキンケア',
            'image' => 'skincare/mist.png',
            'description' => '乾燥を感じた時、瞬時に水分を補給し、肌のバリア機能をサポート。',
        ]);
        // リムーバー
        Product::create([
            'name' => 'Blueveil Aqua Eye & Lip Remover',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'skincare/remover.png',
            'description' => '二層式でウォータープルーフのメイクも素早く優しくオフ。',
        ]);
        // 洗顔
        Product::create([
            'name' => 'Blueveil Marine Creamy Face Wash',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'skincare/facewash.png',
            'description' => '豊かな泡立ちとマリンミネラルで、毛穴の奥まで洗浄。',
        ]);
        // ナイトクリーム
        Product::create([
            'name' => 'Blueveil Deep Sea Sleeping Mask',
            'price' => 6500,
            'category' => 'スキンケア',
            'image' => 'skincare/mask.png',
            'description' => '寝ている間に肌を集中的にケアするジェル状マスク。',
        ]);
        // オールインワンジェル
        Product::create([
            'name' => 'Blueveil Ocean Fresh All-in-One Gel',
            'price' => 4000,
            'category' => 'スキンケア',
            'image' => 'skincare/allingel.png',
            'description' => '化粧水・美容液・乳液がこれ一つで完了。',
        ]);

        // ===============================
        // 💇 ヘアケア
        // ===============================
        // シャンプー
        Product::create([
            'name' => 'Blueveil Marine Revitalizing Shampoo',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'haircare/shampoo.png',
            'description' => 'フローラルが香る癒しのシャンプー。髪に海風の息吹を。',
        ]);
        // コンディショナー
        Product::create([
            'name' => 'Blueveil Marine Deep Nourish Conditioner',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'haircare/linse.png',
            'description' => '海の恵みで髪を包み、しなやかで艶やかな指通りへ。',
        ]);
        // 固形シャンプー
        Product::create([
            'name' => 'Blueveil Zero-Plastic Shampoo Bar',
            'price' => 2500,
            'category' => 'ヘアケア',
            'image' => 'haircare/shampoobar.png',
            'description' => 'プラスチックフリーで環境に配慮した固形シャンプー。',
        ]); 
        // ヘアオイル
        Product::create([
            'name' => 'Blueveil Marine Gloss Hair Oil',
            'price' => 2900,
            'category' => 'ヘアケア',
            'image' => 'haircare/hairoil.png',
            'description' => '髪に海の輝きとツヤを。さらさらヘアへ。',
        ]);

        // ===============================
        // 🧴 ボディケア
        // ===============================
        // ボディクリーム
        Product::create([
            'name' => 'Blueveil Aqua Rich Body Cream',
            'price' => 3400,
            'category' => 'ボディケア',
            'image' => 'bodycare/bodycream.png',
            'description' => '濃厚な潤いで、贅沢なボディケア体験を。',
        ]);
        // ボディウォッシュ
        Product::create([
            'name' => 'Blueveil Marine Fresh Body Wash',
            'price' => 2800,
            'category' => 'ボディケア',
            'image' => 'bodycare/bodywash.png',
            'description' => '朝の海風のように、肌を澄ませるバスタイムを。',
        ]);
        // バスソルト
        Product::create([
            'name' => 'Blueveil Ocean Relax Bath Salt',
            'price' => 2200,
            'category' => 'ボディケア',
            'image' => 'bodycare/bathsalt.png',
            'description' => '海のミネラルが、心と肌をやさしく包み込む。',
        ]);
        // バスオイル
        Product::create([
            'name' => 'Blueveil Marine Ocean Relax Bath Oil',
            'price' => 3100,
            'category' => 'ボディケア',
            'image' => 'bodycare/bathoil.png',
            'description' => '深海の香りに満たされる、静かな癒しのバスタイム。',
        ]);

        // ===============================
        // 💋 リップケア
        // ===============================
        // リップバーム
        Product::create([
            'name' => 'Blueveil Marine Lip Essence',
            'price' => 1400,
            'category' => 'リップケア',
            'image' => 'lipcare/Lip.png',
            'description' => '潤いがとけこむ、海のようなツヤめき唇へ。',
        ]);

        Product::create([
            'name' => 'Blueveil Coral Kiss Lip Balm',
            'price' => 1800,
            'category' => 'リップケア',
            'image' => 'lipcare/coralkiss.png',
            'description' => '海藻エキスとコーラルオイルを配合。乾燥や荒れを防ぎ、自然なツヤと血色感を与えるリップバーム。紫外線から唇を守りながら、透明感のあるうるおいを長時間キープします。',
        ]);

        Product::create([
            'name' => 'Blueveil Lip Polish',
            'price' => 1980,
            'category' => 'リップケア',
            'image' => 'lipcare/ripscrab.png',
            'description' => '乾燥や荒れが気になる唇に、やさしくうるおいを与えるリップスクラブ。天然由来のシュガー粒が古い角質をやさしくオフし、ホホバオイルとシアバターがしっとりなめらかに整えます。使用後はふっくら柔らかな唇へ。ほんのり甘いバニラ＆ベリーの香りで癒しのケアタイムを。',
        ]);

        Product::create([
            'name' => 'Hydrating Lip Color',
            'price' => 2500,
            'category' => 'リップケア',
            'image' => 'lipcare/lipstick.png',
            'description' => '植物由来のオイルをたっぷり配合した保湿リップカラー。唇の乾燥を防ぎながら、鮮やかな発色が長時間続きます。',
        ]);

        // ===============================
        // 🌸 フレグランス
        // ===============================
        //ハンドクリーム
        Product::create([
            'name' => 'Blueveil Aqua Hand Essence',
            'price' => 1600,
            'category' => 'フレグランス',
            'image' => 'fragrance/handcream.png',
            'description' => '指先に、透明なうるおいとやわらかな香りを。',
        ]);
        // 香水
        Product::create([
            'name' => 'Blueveil Marine Breeze Eau de Parfum',
            'price' => 8800,
            'category' => 'フレグランス',
            'image' => 'fragrance/parfum.png',
            'description' => '海辺のそよ風のように、透明感のあるフローラルマリンノート。',
        ]);
        // ルームフレグランス
        Product::create([
            'name' => 'Blueveil Deep Sea Room Diffuser',
            'price' => 5400,
            'category' => 'フレグランス',
            'image' => 'fragrance/roomfragrance.png',
            'description' => '深海の静寂を思わせるアクアウッディの香り。',
        ]);
        // ボディミスト
        Product::create([
            'name' => 'Blueveil Ocean Whisper Body Mist',
            'price' => 3200,
            'category' => 'フレグランス',
            'image' => 'fragrance/bodymist.png',
            'description' => '軽やかなマリンとホワイトティーの香りが、髪やボディを包み込みます。',
        ]);
        // アロマキャンドル
        Product::create([
            'name' => 'Blueveil Ocean Glow Candle',
            'price' => 4200,
            'category' => 'フレグランス',
            'image' => 'fragrance/candle.png',
            'description' => '波の音を感じるようなマリンフローラルの香り。',
        ]);
    }
}
