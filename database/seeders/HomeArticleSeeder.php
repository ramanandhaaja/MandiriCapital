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
                'content' => 'IDR3,8Bn',
                'published_date' => Carbon::now()->subDays(30),
                'image_path' => ''
            ],
            [
                'category' => 'Counter',
                'title' => 'Synergy Value',
                'slug' => 'synergy-value',
                'content' => '25',
                'published_date' => Carbon::now()->subDays(15),
                'image_path' => ''
            ],
            [
                'category' => 'Counter',
                'title' => 'Startup In Our Ecosystem',
                'slug' => 'startup-in-our-ecosystem',
                'content' => '13',
                'published_date' => Carbon::now()->subDays(45),
                'image_path' => ''
            ]
        ];

        foreach ($articles as $articleData) {
            HomeArticle::create($articleData);
        }
    }
}
