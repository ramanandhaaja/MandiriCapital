<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // First, create categories
        $categories = [
            ['name' => 'Fintech', 'slug' => 'fintech'],
            ['name' => 'Unicorn', 'slug' => 'unicorn'],
            ['name' => 'Enterprise', 'slug' => 'enterprise'],
            ['name' => 'Customer', 'slug' => 'customer'],
        ];

        foreach ($categories as $category) {
            PortfolioCategory::create($category);
        }

        // Create sample portfolios
        $portfolios = [
            [
                'name' => 'Agriaku',
                'description' => 'A leading technology company specializing in AI solutions.',
                'stage' => 'Growth',
                'website_url' => 'https://techinnovators.com',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'Technology',
            ],
            [
                'name' => 'Green Energy Solutions',
                'description' => 'Renewable energy solutions provider.',
                'stage' => 'Early Stage',
                'website_url' => 'https://greenenergy.com',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2023',
                'sector' => 'Energy',
            ],
            [
                'name' => 'FinTech Connect',
                'description' => 'Digital payment and banking infrastructure solutions provider.',
                'stage' => 'Series B',
                'website_url' => 'https://fintechconnect.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Michael Chen',
                'year_invested' => '2022',
                'sector' => 'Financial Technology',
            ],
            [
                'name' => 'HealthTech Indonesia',
                'description' => 'Telemedicine and healthcare management platform.',
                'stage' => 'Series A',
                'website_url' => 'https://healthtechid.com',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Dr. Siti Rahma',
                'year_invested' => '2023',
                'sector' => 'Healthcare',
            ],
            [
                'name' => 'EduTech Solutions',
                'description' => 'Online learning and skill development platform.',
                'stage' => 'Growth',
                'website_url' => 'https://edutech.co.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'David Wong',
                'year_invested' => '2021',
                'sector' => 'Education',
            ],
            [
                'name' => 'LogisticsPro',
                'description' => 'End-to-end logistics and supply chain management platform.',
                'stage' => 'Series C',
                'website_url' => 'https://logisticspro.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'Logistics',
            ],
            [
                'name' => 'Sustainable Foods',
                'description' => 'Plant-based food technology and sustainable agriculture solutions.',
                'stage' => 'Early Stage',
                'website_url' => 'https://sustainablefoods.co.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Jessica Tanoto',
                'year_invested' => '2023',
                'sector' => 'Food Technology',
            ],
            [
                'name' => 'CyberSec Indonesia',
                'description' => 'Cybersecurity and digital protection services.',
                'stage' => 'Series A',
                'website_url' => 'https://cybersecid.com',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => 'Cybersecurity',
            ],
            [
                'name' => 'CleanEnergy Tech',
                'description' => 'Renewable energy and sustainability solutions provider.',
                'stage' => 'Growth',
                'website_url' => 'https://cleanenergytech.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Clean Energy',
            ],
            [
                'name' => 'RetailTech Solutions',
                'description' => 'Digital retail and e-commerce enablement platform.',
                'stage' => 'Series B',
                'website_url' => 'https://retailtech.co.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Robert Tanjung',
                'year_invested' => '2023',
                'sector' => 'Retail Technology',
            ],
            [
                'name' => 'AI Vision Labs',
                'description' => 'Computer vision and AI-powered analytics solutions for enterprise.',
                'stage' => 'Series A',
                'website_url' => 'https://aivisionlabs.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Kevin Wijaya',
                'year_invested' => '2023',
                'sector' => 'Artificial Intelligence',
            ],
            [
                'name' => 'GreenMobile',
                'description' => 'Electric vehicle sharing and sustainable mobility platform.',
                'stage' => 'Growth',
                'website_url' => 'https://greenmobile.co.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Dewi Suryani',
                'year_invested' => '2022',
                'sector' => 'Mobility',
            ],
            [
                'name' => 'BlockchainPay',
                'description' => 'Blockchain-based payment and remittance solutions.',
                'stage' => 'Series B',
                'website_url' => 'https://blockchainpay.id',
                'image_path' => 'portfolios/01JE6MRRTTXKND3BKWN7WCEM86.png',
                'ceo_name' => 'Adrian Hartono',
                'year_invested' => '2023',
                'sector' => 'Blockchain',
            ],
        ];

        foreach ($portfolios as $portfolio) {
            $portfolio['portfolio_category_id'] = PortfolioCategory::inRandomOrder()->first()->id;
            Portfolio::create(array_merge($portfolio, [
                'slug' => Str::slug($portfolio['name'])
            ]));
        }
    }
}