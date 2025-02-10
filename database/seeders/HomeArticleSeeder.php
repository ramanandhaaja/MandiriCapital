<?php

namespace Database\Seeders;

use App\Models\HomeArticle;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomeArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'category' => 'Counter',
                'title' => 'AUM',
                'slug' => 'aum',
                'content' => 'IDR3,844Bn',
                'sub_content' => '',
                'published_date' => Carbon::now()->subDays(30),
                'image_path' => ''
            ],
            [
                'category' => 'Counter',
                'title' => 'Bank Mandiri Total Asset',
                'slug' => 'bank-mandiri-total-asset',
                'content' => 'IDR2,427Tn',
                'sub_content' => '*As of December 2024',
                'published_date' => Carbon::now()->subDays(15),
                'image_path' => ''
            ]
        ];

        foreach ($articles as $articleData) {
            HomeArticle::create($articleData);
        }
    }
}
