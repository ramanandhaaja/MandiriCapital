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
                'slug' => '',
                'content' => 'IDR3,8Bn',
                'published_date' => Carbon::now()->subDays(30),
                'image_path' => ''
            ],
            [
                'category' => 'Counter',
                'title' => 'Bank Mandiri Total Asset',
                'slug' => '*As of September 2024',
                'content' => 'IDR2,324Tn',
                'published_date' => Carbon::now()->subDays(15),
                'image_path' => ''
            ]
        ];

        foreach ($articles as $articleData) {
            HomeArticle::create($articleData);
        }
    }
}
