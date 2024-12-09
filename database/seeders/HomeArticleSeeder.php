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
                'category' => 'Technology',
                'title' => 'Innovations in Artificial Intelligence',
                'slug' => 'innovations-in-artificial-intelligence',
                'content' => 'Artificial Intelligence continues to revolutionize industries across the globe, fundamentally changing how we live and work. Recent advancements in machine learning algorithms and neural networks have opened up unprecedented possibilities in areas such as healthcare, finance, and autonomous systems.',
                'published_date' => Carbon::now()->subDays(30),
                'image_path' => '/images/ai-innovation.jpg'
            ],
            [
                'category' => 'Finance',
                'title' => 'Emerging Trends in Digital Banking',
                'slug' => 'emerging-trends-in-digital-banking',
                'content' => 'The financial sector is undergoing a massive transformation with the rise of digital banking technologies. Mobile banking, blockchain, and AI-driven financial services are reshaping how consumers interact with financial institutions.',
                'published_date' => Carbon::now()->subDays(15),
                'image_path' => '/images/digital-banking.jpg'
            ],
            [
                'category' => 'Sustainability',
                'title' => 'Green Technologies Shaping Our Future',
                'slug' => 'green-technologies-shaping-our-future',
                'content' => 'Sustainable technologies are becoming increasingly crucial in addressing global environmental challenges. From renewable energy solutions to carbon capture technologies, innovative approaches are emerging to combat climate change.',
                'published_date' => Carbon::now()->subDays(45),
                'image_path' => '/images/green-tech.jpg'
            ]
        ];

        foreach ($articles as $articleData) {
            HomeArticle::create($articleData);
        }
    }
}
