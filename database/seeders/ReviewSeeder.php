<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            // ===============================
            // 💧 スキンケア
            // ===============================
            'Blueveil Aqua Essence Lotion' => [
                [
                    'reviewer_name' => 'Mizuki',
                    'rating' => 5,
                    'comment' => 'ひとしずくで肌が潤って感動しました！'
                ],
                [
                    'reviewer_name' => 'Sakura',
                    'rating' => 4,
                    'comment' => '香りがさわやかで気に入っています。'
                ],
            ],
            'Blueveil Marine Glow Serum' => [
                [
                    'reviewer_name' => 'Yuki',
                    'rating' => 5, 
                    'comment' => '肌のハリが出て、使うのが楽しみです。'
                ],
                [
                    'reviewer_name' => 'Rina',
                    'rating' => 4, 
                    'comment' => 'テクスチャーが軽くて使いやすい。'
                ],
            ],
            'Blueveil Deep Ocean Cream' => [
                [
                    'reviewer_name' => 'Haruto',
                    'rating' => 5, 
                    'comment' => '深海のクリームで肌がふっくら。'
                ],
                [
                    'reviewer_name' => 'Aoi',
                    'rating' => 4, 
                    'comment' => '香りもよく毎日使えます。'
                ],
            ],
            'Blueveil Aqua Pure Cleansing Gel' => [
                [
                    'reviewer_name' => 'Nao',
                    'rating' => 5, 
                    'comment' => '肌に優しく、洗い上がりがしっとり。'
                ],
                [
                    'reviewer_name' => 'Hana',
                    'rating' => 4, 
                    'comment' => '朝晩の洗顔が楽しみになりました。'
                ],
            ],
            'Blueveil Aqua Revital Mask' => [
                [
                    'reviewer_name' => 'Riku',
                    'rating' => 5, 
                    'comment' => '潤いがすごい！肌が柔らかくなります。'
                ],
                [
                    'reviewer_name' => 'Mao',
                    'rating' => 4, 
                    'comment' => 'パック後の透明感が素晴らしい。'
                ],
            ],
            'Blueveil Clear Sea UV Fluid' => [
                [
                    'reviewer_name' => 'Sora',
                    'rating' => 5, 
                    'comment' => '白浮きせずにしっかり日焼け止めできる。'
                ],
                [
                    'reviewer_name' => 'Mai',
                    'rating' => 4, 
                    'comment' => '軽くて毎日使いやすいです。'
                ],
            ],
            'Blueveil Deep Sea Eye Concentrate' => [
                [
                    'reviewer_name' => 'Takumi',
                    'rating' => 5,
                    'comment' => '目元がしっとりして疲れ目にも効きます。'
                ],
                [
                    'reviewer_name' => 'Aya',
                    'rating' => 4, 
                    'comment' => '夜に使うと翌朝の目元が違う。'
                ],
            ],
            'Blueveil Aqua Smooth Peeling Gel' => [
                [
                    'reviewer_name' => 'Ren',
                    'rating' => 5, 
                    'comment' => 'くすみが取れて肌が明るくなります。'
                ],
                [
                    'reviewer_name' => 'Nana',
                    'rating' => 4, 
                    'comment' => '肌に優しくて使いやすい。'
                ],
            ],
            'Blueveil Ocean Mist Hydrator' => [
                [
                    'reviewer_name' => 'Kaito',
                    'rating' => 5, 
                    'comment' => '乾燥が気になる時にすぐ潤う。'
                ],
                [
                    'reviewer_name' => 'Miki',
                    'rating' => 4, 
                    'comment' => '香りもさっぱりして良いです。'
                ],
            ],
            'Blueveil Aqua Eye & Lip Remover' => [
                [
                    'reviewer_name' => 'Hiro',
                    'rating' => 5, 
                    'comment' => 'ウォータープルーフもすぐ落ちて優しい。'
                ],
                [
                    'reviewer_name' => 'Emi',
                    'rating' => 4, 
                    'comment' => '肌荒れせずに使えます。'
                ],
            ],
            'Blueveil Marine Creamy Face Wash' => [
                [
                    'reviewer_name' => 'Yuto',
                    'rating' => 5, 
                    'comment' => '泡立ちが良くて毛穴までスッキリ。'
                ],
                [
                    'reviewer_name' => 'Sara',
                    'rating' => 4, 
                    'comment' => '香りも気に入っています。'
                ],
            ],
            'Blueveil Deep Sea Sleeping Mask' => [
                [
                    'reviewer_name' => 'Kanna',
                    'rating' => 5, 
                    'comment' => '翌朝の肌がふっくらして嬉しい。'
                ],
                [
                    'reviewer_name' => 'Takao',
                    'rating' => 4, 
                    'comment' => '寝ている間のケアが手軽で便利。'
                ],
            ],
            'Blueveil Ocean Fresh All-in-One Gel' => [
                [
                    'reviewer_name' => 'Yua',
                    'rating' => 5, 
                    'comment' => 'これ1つでスキンケア完了、忙しい朝に最適。'
                ],
                [
                    'reviewer_name' => 'Souta',
                    'rating' => 4, 
                    'comment' => 'テクスチャーが滑らかで使いやすい。'
                ],
            ],

            // ===============================
            // 💇 ヘアケア
            // ===============================
            'Blueveil Marine Revitalizing Shampoo' => [
                [
                    'reviewer_name' => 'Haru',
                    'rating' => 5, 
                    'comment' => '髪がサラサラになり香りも癒されます。'
                ],
                [
                    'reviewer_name' => 'Nana',
                    'rating' => 4, 
                    'comment' => '泡立ちが良くて使いやすい。'
                ],
            ],
            'Blueveil Marine Deep Nourish Conditioner' => [
                [
                    'reviewer_name' => 'Riku',
                    'rating' => 5, 
                    'comment' => '髪がしっとりまとまります。'
                ],
                [
                    'reviewer_name' => 'Mika',
                    'rating' => 4, 
                    'comment' => '香りも良くて毎日使いたいです。'
                ],
            ],
            'Blueveil Zero-Plastic Shampoo Bar' => [
                [
                    'reviewer_name' => 'Kaito',
                    'rating' => 5, 
                    'comment' => 'プラスチックフリーでエコ、髪もサラサラ。'
                ],
                [
                    'reviewer_name' => 'Aya',
                    'rating' => 4, 
                    'comment' => '固形だけど泡立ちが良い。'
                ],
            ],
            'Blueveil Marine Gloss Hair Oil' => [
                [
                    'reviewer_name' => 'Tomo',
                    'rating' => 5, 
                    'comment' => 'ツヤが出て髪が柔らかくなる。'
                ],
                [
                    'reviewer_name' => 'Mio',
                    'rating' => 4, 
                    'comment' => '軽くてベタつかず使いやすい。'
                ],
            ],

            // ===============================
            // 💧 ボディケア
            // ===============================
            'Blueveil Aqua Rich Body Cream' => [
                [
                    'reviewer_name' => 'Souta',
                    'rating' => 5, 
                    'comment' => '濃厚な潤いで肌が柔らかくなりました。'
                ],
                [
                    'reviewer_name' => 'Hina',
                    'rating' => 4,
                    'comment' => '香りも良くリラックスできます。'
                ],
            ],
            'Blueveil Marine Fresh Body Wash' => [
                [
                    'reviewer_name' => 'Riku',
                    'rating' => 5, 
                    'comment' => '朝の洗い上がりが爽快で気持ち良い。'
                ],
                [
                    'reviewer_name' => 'Mao',
                    'rating' => 4, 
                    'comment' => '泡立ちが良くて肌がしっとり。'
                ],
            ],
            'Blueveil Ocean Relax Bath Salt' => [
                [
                    'reviewer_name' => 'Haruto',
                    'rating' => 5,
                    'comment' => '入浴中の香りが良くリラックスできます。'
                ],
                [
                    'reviewer_name' => 'Miki',
                    'rating' => 4, 
                    'comment' => '肌もすべすべになりました。'
                ],
            ],
            'Blueveil Marine Ocean Relax Bath Oil' => [
                [
                    'reviewer_name' => 'Sora',
                    'rating' => 5, 
                    'comment' => '香りが最高でお風呂タイムが楽しみ。'
                ],
                [
                    'reviewer_name' => 'Emi',
                    'rating' => 4, 
                    'comment' => '肌がしっとりして乾燥しません。'
                ],
            ],

            // ===============================
            // 💋 リップケア
            // ===============================
            'Blueveil Marine Lip Essence' => [
                [
                    'reviewer_name' => 'Yua',
                    'rating' => 5,
                    'comment' => '唇が潤ってツヤが出ます。'
                ],
                [
                    'reviewer_name' => 'Takumi',
                    'rating' => 4, 
                    'comment' => '香りも良く毎日使えます。'
                ],
            ],

            // ===============================
            // 🌸 フレグランス
            // ===============================
            'Blueveil Aqua Hand Essence' => [
                [
                    'reviewer_name' => 'Hana',
                    'rating' => 5,
                    'comment' => '指先がしっとりして香りもやさしい。'
                ],
                [
                    'reviewer_name' => 'Nao',
                    'rating' => 4,
                    'comment' => '使い心地が良く手が荒れません。'
                ],
            ],
            'Blueveil Marine Breeze Eau de Parfum' => [
                [
                    'reviewer_name' => 'Ren',
                    'rating' => 5, 
                    'comment' => '海風の香りが爽やかで気に入っています。'
                ],
                [
                    'reviewer_name' => 'Mio',
                    'rating' => 4,
                    'comment' => '香りが長持ちして嬉しいです。'
                ],
            ],
            'Blueveil Deep Sea Room Diffuser' => [
                [
                    'reviewer_name' => 'Takao',
                    'rating' => 5, 
                    'comment' => '部屋が深海の香りでリラックスできます。'
                ],
                [
                    'reviewer_name' => 'Aya',
                    'rating' => 4, 
                    'comment' => '見た目も可愛くて気に入っています。'
                ],
            ],
            'Blueveil Ocean Whisper Body Mist' => [
                [
                    'reviewer_name' => 'Kaito',
                    'rating' => 5,
                    'comment' => '軽やかで全身に使いやすい。'
                ],
                [
                    'reviewer_name' => 'Sara',
                    'rating' => 4,
                    'comment' => '香りが優しく毎日使えます。'
                ],
            ],
            'Blueveil Ocean Glow Candle' => [
                [
                    'reviewer_name' => 'Hiro',
                    'rating' => 5,
                    'comment' => '香りに癒されてゆったり過ごせます。'
                ],
                [
                    'reviewer_name' => 'Mika',
                    'rating' => 4,
                    'comment' => 'インテリアとしても可愛いです。'
                ],
            ],
        ];

        foreach ($reviews as $productName => $productReviews) {
            $product = Product::where('name', $productName)->first();
            if (!$product) continue;

            foreach ($productReviews as $reviewData) {
                Review::create([
                    'product_id' => $product->id,
                    'reviewer_name' => $reviewData['reviewer_name'],
                    'rating' => $reviewData['rating'],
                    'comment' => $reviewData['comment'],
                ]);
            }
        }
    }
}
