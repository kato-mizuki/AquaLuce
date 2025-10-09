<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Product;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = Product::all();

        foreach ($products as $product) {
            Review::create([
                'product_id' => $product->id,
                'reviewer_name' => '美香',
                'rating' => 5,
                'comment' => '使ってすぐに肌がしっとりしました！香りも上品でお気に入りです。',
            ]);

            Review::create([
                'product_id' => $product->id,
                'reviewer_name' => '由美',
                'rating' => 4,
                'comment' => 'デザインもかわいくて、プレゼントにもぴったりでした。',
            ]);
        }
    }
}