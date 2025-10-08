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
        //化粧水
        Product::create([
            'name' => 'Blueveil Aqua Essence Lotion',
            'price' => 3800,
            'category' => 'スキンケア',
            'image' => 'lotion.png',
            'description' => 'ひとしずくで、海の潤いをそのまま肌に。',
        ]);

        //美容液
        Product::create([
            'name' => 'Blueveil Marine Glow Serum',
            'price' => 5200,
            'category' => 'スキンケア',
            'image' => 'serum.png',
            'description' => '光をまとった、なめらかでハリのある素肌へ。',
        ]);

        //クリーム
        Product::create([
            'name' => 'Blueveil Deep Ocean Cream',
            'price' => 4800,
            'category' => 'スキンケア',
            'image' => 'cream.png',
            'description' => '深い海のやすらぎで、翌朝の肌に輝きを。',
        ]);

        //クレンジングジェル
        Product::create([
            'name' => 'Blueveil Aqua Pure Cleansing Gel',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'cleansing.png',
            'description' => '肌に優しく、透明感あふれる洗い上がり。',
        ]);

        //シートマスク
        Product::create([
            'name' => 'Blueveil Aqua Revital Mask',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'sheetmask.png',
            'description' => '潤いを集中補給。みずみずしい肌に導くフェイスマスク。',
        ]);

        //日焼け止め
        Product::create([
            'name' => 'Blueveil Clear Sea UV Fluid',
            'price' => 3600,
            'category' => 'スキンケア',
            'image' => 'suncut.png',
            'description' => '白浮きせず、透明感のある肌を守る日焼け止め。',
        ]);

        //ヘアオイル
        Product::create([
            'name' => 'Blueveil Marine Gloss Hair Oil',
            'price' => 2900,
            'category' => 'ヘアケア',
            'image' => 'hairoil.png',
            'description' => '髪に海の輝きとツヤを。さらさらヘアへ。',
        ]);

        //ボディクリーム
        Product::create([
            'name' => 'Blueveil Aqua Rich Body Cream',
            'price' => 3400,
            'category' => 'ボディケア',
            'image' => 'bodycream.png',
            'description' => '濃厚な潤いで、贅沢なボディケア体験を。',
        ]);

        //ボディーソープ
        Product::create([
            'name' => 'Blueveil Marine Fresh Body Wash',
            'price' => 2800,
            'category' => 'ボディケア',
            'image' => 'bodywash.png',
            'description' => '朝の海風のように、肌を澄ませるバスタイムを。',
        ]);

        //バスソルト
        Product::create([
            'name' => 'Blueveil Ocean Relax Bath Salt',
            'price' => 2200,
            'category' => 'ボディケア',
            'image' => 'bathsalt.png',
            'description' => '海のミネラルが、心と肌をやさしく包み込む。',
        ]);

        //ハンドクリーム
        Product::create([
            'name' => 'Blueveil Aqua Hand Essence',
            'price' => 1600,
            'category' => 'ハンドケア',
            'image' => 'handcream.png',
            'description' => '指先に、透明なうるおいとやわらかな香りを。',
        ]);

        //アイクリーム
        Product::create([
            'name' => 'Blueveil Deep Sea Eye Concentrate',
            'price' => 3200,
            'category' => 'フェイスケア',
            'image' => 'eyecream.png',
            'description' => '深海の潤いが、まなざしに光を宿す。',
        ]);

        //リップバーム
        Product::create([
            'name' => 'Blueveil Marine Lip Essence',
            'price' => 1400,
            'category' => 'リップケア',
            'image' => 'Lip.png',
            'description' => '潤いがとけこむ、海のようなツヤめき唇へ。',
        ]);

        //ピーリングジェル
        Product::create([
            'name' => 'Blueveil Aqua Smooth Peeling Gel',
            'price' => 2900,
            'category' => 'フェイスケア',
            'image' => 'peelinggel.png',
            'description' => 'くすみをやさしくオフして、波間のような透明肌へ。',
        ]);

        //シャンプー
        Product::create([
            'name' => 'Blueveil Marine Revitalizing Shampoo',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'shampoo.png',
            'description' => '髪に海風の息吹を。フローラルが香る癒しのひととき。',
        ]);

        //コンディショナー
        Product::create([
            'name' => 'Blueveil Marine Deep Nourish Conditioner',
            'price' => 2600,
            'category' => 'ヘアケア',
            'image' => 'linse.png',
            'description' => '海の恵みで髪を包み、しなやかで艶やかな指通りへ。',
        ]);

        //バスオイル
        Product::create([
            'name' => 'Blueveil Marine Ocean Relax Bath Oil',
            'price' => 3100,
            'category' => 'ボディケア',
            'image' => 'bathoil.png',
            'description' => '深海の香りに満たされる、静かな癒しのバスタイム。',
        ]);

        //化粧ミスト
        Product::create([
            'name' => 'Blueveil Ocean Mist Hydrator',
            'price' => 3100,
            'category' => 'スキンケア',
            'image' => 'mist.png',
            'description' => '冷房や外気の乾燥による肌のつっぱりやカサつきを感じた時、瞬時に水分を補給し、バリア機能をサポート。',
        ]);

        //リムーバー
        Product::create([
            'name' => 'Blueveil Aqua Eye & Lip Remover',
            'price' => 2800,
            'category' => 'スキンケア',
            'image' => 'remover.png',
            'description' => '二層式でウォータープルーフのメイクも素早く優しくオフ。',
        ]);

        //洗顔
        Product::create([
            'name' => 'Blueveil Marine Creamy Face Wash',
            'price' => 3200,
            'category' => 'スキンケア',
            'image' => 'facewash.png',
            'description' => '豊かな泡立ちとマリンミネラルで、毛穴の奥の汚れや古い角質をすっきり洗浄。',
        ]);

        //ナイトクリーム
        Product::create([
            'name' => 'Blueveil Deep Sea Sleeping Mask',
            'price' => 6500,
            'category' => 'スキンケア',
            'image' => 'cream.png',
            'description' => '寝ている間に肌を集中的にケアするジェル状マスク。',
        ]);

        //オールインワンジェル
        Product::create([
            'name' => 'Blueveil Ocean Fresh All-in-One Gel',
            'price' => 4000,
            'category' => 'スキンケア',
            'image' => 'allingel.png',
            'description' => '化粧水・美容液・乳液がこれ一つで完了。',
        ]);

        //固形シャンプー
        Product::create([
            'name' => 'Blueveil Zero-Plastic Shampoo Bar',
            'price' => 2500,
            'category' => 'ヘアケア',
            'image' => 'shampoobar.png',
            'description' => 'プラスチックフリーで環境に配慮。濃縮された海の恵みが、豊かに泡立ち、髪と頭皮を優しく洗い上げます。',
        ]);

        //オードパルファム
        Product::create([
            'name' => 'Blueveil Marine Breeze Eau de Parfum',
            'price' => 8800,
            'category' => 'フレグランス',
            'image' => 'parfum.png',
            'description' => '海辺のそよ風のように、透明感のあるフローラルマリンノート。日常に穏やかなリゾートの余韻を。'
        ]);

        //シャンプー詰め替え用
        Product::create([
            'name' => 'Blueveil Marine Breeze Eau de Parfum',
            'price' => 8800,
            'category' => 'ヘアケア',
            'image' => 'shampoo_lifil.png',
            'description' => '海辺を歩いているような、心地よいリラックス感のある香り。',
        ]);
        
        //リンス詰め替え用
        Product::create([
            'name' => 'Blueveil Marine Breeze Eau de Parfum',
            'price' => 8800,
            'category' => 'ヘアケア',
            'image' => 'shampoo_lifil.png',
            'description' => '海辺を歩いているような、心地よいリラックス感のある香り。',
        ]);

        //ルームフレグランス
        Product::create([
            'name' => 'Blueveil Deep Sea Room Diffuser',
            'price' => 5400,
            'category' => 'フレグランス',
            'image' => 'roomfragrance.png',
            'description' => '深海の静寂を思わせるアクアウッディの香り。お部屋を上質なリラックス空間へと導きます。'
        ]);

        //ボディミスト
        Product::create([
            'name' => 'Blueveil Ocean Whisper Body Mist',
            'price' => 3200,
            'category' => 'フレグランス',
            'image' => 'bodymist.png',
            'description' => '軽やかなマリンとホワイトティーの香りが、髪やボディをやさしく包み込みます。外出前や気分転換に最適。'
        ]);

        //アロマキャンドル
        Product::create([
            'name' => 'Blueveil Ocean Glow Candle',
            'price' => 4200,
            'category' => 'フレグランス',
            'image' => 'candle.png',
            'description' => '波の音を感じるようなマリンフローラルの香り。火を灯せば、穏やかな光と香りが心を包みます。'
        ]);
    }
}
