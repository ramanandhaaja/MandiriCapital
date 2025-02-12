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
                'title' => [
                    'en' => 'AUM',
                    'id' => 'AUM'
                ],
                'content' => [
                    'en' => 'IDR3,844Bn',
                    'id' => 'IDR3,844M'
                ],
                'sub_content' => [
                    'en' => '',
                    'id' => ''
                ],
                'published_date' => Carbon::now()->subDays(30),
            ],
            [
                'title' => [
                    'en' => 'Bank Mandiri Total Asset',
                    'id' => 'Total Aset Bank Mandiri'
                ],
                'content' => [
                    'en' => 'IDR2,427Tn',
                    'id' => 'IDR2,427T'
                ],
                'sub_content' => [
                    'en' => '*As of December 2024',
                    'id' => '*Per Desember 2024'
                ],
                'published_date' => Carbon::now()->subDays(15),
            ]
        ];

        foreach ($articles as $articleData) {
            HomeArticle::create($articleData);
        }
    }
}
