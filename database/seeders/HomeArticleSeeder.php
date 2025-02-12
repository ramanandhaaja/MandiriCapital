<?php

namespace Database\Seeders;

use App\Models\HomeArticle;
use App\Models\HomeHeadline;
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

        $headlines = [
            [
                'title' => [
                    'en' => 'Connecting Startups Program',
                    'id' => 'Connecting Startups Program'
                ],
                'category' => [
                    'en' => 'PROGRAM',
                    'id' => 'PROGRAM'
                ],
                'logo_path' => 'hero-sections/01JKXPXT1CJX76NBEDS902F59Y.png',
                'image_path' => 'hero-sections/01JKXPXT1ESTNDTHJWFFGASFFD.png',
                'link_url' => "https://mandiri-capital.co.id/platform/xponent",
                'type' => 'medium',
                'position' => '',
                'published_date' => Carbon::now()->subDays(30),
            ],
            [
                'title' => [
                    'en' => 'The Billion Dollar Moment: A Paradigm Shift for Indonesian IPOs',
                    'id' => 'The Billion Dollar Moment: A Paradigm Shift for Indonesian IPOs'
                ],
                'category' => [
                    'en' => 'WHITE PAPER',
                    'id' => 'WHITE PAPER'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXPZJX52EK685EGK1KSX04R.jpeg',
                'link_url' => 'https://www.mandiri-capital.co.id/report/the-billion-dollar-moment-a-paradigm-shift-for-indonesia-ipos',
                'type' => 'large',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => 'Startup Accelerator',
                    'id' => 'Startup Accelerator'
                ],
                'category' => [
                    'en' => 'PROGRAM',
                    'id' => 'PROGRAM'
                ],
                'logo_path' => 'hero-sections/01JKXQ2KJSNC0965TGXQ4S3ZXW.png',
                'image_path' => 'hero-sections/01JKXQ2KJVH0CK5SVSGS5HDN1P.png',
                'link_url' => 'https://mandiri-capital.co.id/platform/zenith',
                'type' => 'medium',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => '',
                    'id' => ''
                ],
                'category' => [
                    'en' => 'PODCAST',
                    'id' => 'PODCAST'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ457EY7AR6BKAZ2GEHTQT.png',
                'link_url' => 'https://mandiri-capital.co.id/platform/zenith',
                'type' => 'medium',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => '',
                    'id' => ''
                ],
                'category' => [
                    'en' => 'NEWS',
                    'id' => 'NEWS'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ4GKKAGDXQ31Y45KERSHQ.jpeg',
                'link_url' => 'https://mandiri-capital.co.id/media/mandiri-capital-indonesia-mendorong-inovasi-digital-melalui-mandiri-innovation-hub-2024-press-release',
                'type' => 'small-square',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => 'Understanding the Stock Market',
                    'id' => 'Understanding the Stock Market'
                ],
                'category' => [
                    'en' => 'BLOG',
                    'id' => 'BLOG'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ6D7HC5J8J21K5YN8PVQQ.png',
                'link_url' => 'http://localhost:8000/media/program-xponent-mci-di-money-20-20-asia-jadi-jembatan-konektivitas-dunia-insight',
                'type' => 'small-square',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => '',
                    'id' => ''
                ],
                'category' => [
                    'en' => 'Featured Investees',
                    'id' => 'Featured Investees'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ6WTKG4RS5C81KGGYJP4B.jpeg',
                'link_url' => 'https://mandiri-capital.co.id/portfolio/amartha',
                'type' => 'medium',
                'position' => 'left',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => '',
                    'id' => ''
                ],
                'category' => [
                    'en' => 'ANNUAL REPORT',
                    'id' => 'ANNUAL REPORT'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ772E0W2KK747A0MY6CXH.jpeg',
                'link_url' => 'https://mandiri-capital.co.id/report/developing-constructive-collaboration-to-achieve-productive-innovation',
                'type' => 'small-square',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
            [
                'title' => [
                    'en' => '',
                    'id' => ''
                ],
                'category' => [
                    'en' => 'SUSTAINABILITY REPORT',
                    'id' => 'SUSTAINABILITY REPORT'
                ],
                'logo_path' => '',
                'image_path' => 'hero-sections/01JKXQ7NBTCM343HCGB20FZY77.png',
                'link_url' => 'https://mandiri-capital.co.id/report/strengthening-sustainability-innovation',
                'type' => 'small-square',
                'position' => 'right',
                'published_date' => Carbon::now()->subDays(15),
            ],
        ];

        foreach ($headlines as $headlineData) {
            HomeHeadline::create($headlineData);
        }
    }
}

