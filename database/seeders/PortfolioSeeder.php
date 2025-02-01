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

        // Create or update categories
        $categoryIds = [];
        foreach ($categories as $category) {
            $portfolioCategory = PortfolioCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
            $categoryIds[] = $portfolioCategory->id;
        }

        // Create sample portfolios
        $portfolios = [
            [
                'name' => 'Agriaku',
                'description' => 'PT Agriaku Digital Indonesia present as a leading local agribusiness company in Indonesia. Based on technology, Agriaku bridges the needs of saprotan (agricultural production facilities) throughout Indonesia that can be ordered anytime and anywhere.',
                'stage' => 'Growth',
                'website_url' => 'https://agriaku.com/',
                'image_path' => 'portfolios/01JHFBJ1829J8ESAM1RRYJ7JMH.png',
                'icon' => 'portfolios/01JHFEEGQGZW2MS0GRPM776CGN.png',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'Agritech',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Amartha',
                'description' => 'Amartha was born with the belief that everyone has the same opportunity to start and grow a business, including those who are less fortunate or unbankable. The Peer-to-peer (P2P) lending platform is here to connect micro and small businesses to access affordable financing capital with investors, who also prioritize impact and meaning in their investments.',
                'stage' => 'Growth',
                'website_url' => 'https://amartha.com/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'P2P Lending',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Assist-X Enterprise',
                'description' => 'AssistX Enterprise is an AI Company that transform uncharted data into actionable insights across industries. Combine with our advanced data optimization technology, enabling smarter decision-making while increasing efficiency up to 10 times.',
                'stage' => 'Growth',
                'website_url' => 'https://assistxenterprise.ai/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'AI',
                'portfolio_category_id' => $categoryIds[0],
            ],

            [
                'name' => 'Ayoconnect',
                'description' => 'Ayoconnect provides innovative solutions for both large enterprises and start-up businesses playing a crucial role in accelerating Indonesia\'s financial inclusion.',
                'stage' => 'Early Stage',
                'website_url' => 'https://www.ayoconnect.com/',
                'image_path' => 'portfolios/01JHFBJAYG9TB806HETC69VP29.png',
                'icon' => 'portfolios/01JHFEET5X1BQXF5GGM0GJ1Y1N.png',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2023',
                'sector' => 'Open Banking',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Bukalapak',
                'description' => 'We envision a tech-enabled economy where people have the opportunity to grow, aided by our innovative online and offline platforms, because everyone deserves equal opportunities to create a better life.',
                'stage' => 'Early Stage',
                'website_url' => 'https://www.bukalapak.com/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2023',
                'sector' => 'e-commerce',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Cakap',
                'description' => 'Cakap is a rapidly growing Indonesian education company that utilizes technology to provide high-quality courses and reputable certifications, while also connecting qualified students with employers for upskilling purposes',
                'stage' => 'Series B',
                'website_url' => 'https://cakap.com/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Michael Chen',
                'year_invested' => '2022',
                'sector' => 'Education',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Crowde',
                'description' => 'The agriculture sector in Indonesia faces significant challenges, including the need for technology integration, an aging farmer population, and rising unemployment in rural areas, leading to a substantial economic gap between rural and urban regions. Despite these issues, there is optimism about addressing these challenges by empowering small and medium-sized farms to grow their businesses and fostering community trust in agriculture. This approach aims to make Indonesia a global food hub.',
                'stage' => 'Series A',
                'website_url' => 'https://www.crowde.co/',
                'image_path' => 'portfolios/01JHFBM9477YPGDGKATKCYSFZ0.png',
                'icon' => 'portfolios/01JHFEJJGHA1NGY53SG54X6WGE.png',
                'ceo_name' => 'Dr. Siti Rahma',
                'year_invested' => '2023',
                'sector' => 'P2P Lending',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Delos',
                'description' => 'DELOS is a science-driven aqua-tech company seeking to disrupt the traditional and fragmented aquaculture industry in Indonesia, with eyes on South Asia as a whole.',
                'stage' => 'Growth',
                'website_url' => 'https://delosaqua.com/',
                'image_path' => 'portfolios/01JHFBMVCXWQXS08S2A8KNTXER.png',
                'icon' => 'portfolios/01JHFEJWG11VDYTNP8633Q4V89.png',
                'ceo_name' => 'David Wong',
                'year_invested' => '2021',
                'sector' => 'Tech',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'FitAja',
                'description' => 'The SuperApp digital health platform, FitAja!, is designed to meet all user needs by providing access to various healthcare services in one app. It offers a range of features and conveniences for accessing healthcare services, from prevention to treatment, such as: online health consultations, digital prescriptions, medicine delivery, online insurance claim submissions, provider information, and many other useful features.',
                'stage' => 'Growth',
                'website_url' => 'https://www.fitaja.id/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'David Wong',
                'year_invested' => '2021',
                'sector' => 'Health',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Goto',
                'description' => 'GoTo is the largest digital ecosystem in Indonesia, with a mission to \'empower progress\' by offering technology infrastructure and solutions that help everyone to access and thrive in the digital economy. The GoTo ecosystem provides a wide range of services including mobility, food delivery, groceries and logistics, as well as payments, financial services, and technology solutions for merchants. The ecosystem also provides e-commerce services through Tokopedia and banking services through its partnership with Bank Jago.',
                'stage' => 'Series C',
                'website_url' => 'https://www.gotocompany.com/',
                'image_path' => 'portfolios/01JHFBNK4D6WNA4S292G1V7TPY.png',
                'icon' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'Tech transport, Bank, E-Commerce',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'Greenhope',
                'description' => 'Redesign the Future Through Sustainable Bioplastic. By shifting to our novel materials at the upstream level, we can reduce greenhouse gas emissions and dangerous microplastics waste footprint, solving both climate and plastic waste pollution at scale.',
                'stage' => 'Series C',
                'website_url' => 'https://www.greenhope.co/',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'ESG',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'Iseller',
                'description' => 'Integrated Digital Business Platform with the Most Complete Ecosystem. From small businesses to industrial giants, iSeller has the solution for your business system needs!',
                'stage' => 'Series C',
                'website_url' => 'http://isellercommerce.com',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'MSME Tech Solution',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'LinkAja',
                'description' => 'LinkAja! is Indonesia\'s proud server-based national electronic money which is the flagship product of PT Fintek Karya Nusantara (Finarya) which has been registered with Bank Indonesia.',
                'stage' => 'Series C',
                'website_url' => 'http://linkaja.id',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'E-wallet',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'Mekari',
                'description' => 'Mekari is the number one Software-as-a-Service (SaaS) company in Indonesia. Mekari\'s mission is to empower professionals and business growth. Mekari has innovative HR and Accounting products (Talenta, Sleekr, Jurnal, KlikPajak) that have been used by thousands of businesses in Indonesia.',
                'stage' => 'Series C',
                'website_url' => 'http://mekari.com',
                'image_path' => 'portfolios/01JHFBQA9WPB01VRXCGGY1DRVC.png',
                'icon' => 'portfolios/01JHFEM8CSPZVF769HJ4MJMA0N.png',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'ERP Saas',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'PrivyID',
                'description' => 'PrivyID is a digital signature provider founded in 2016. In less than a year, Privyid has quickly turned into a major player in the industry by having the biggest companies in the telco industry, multi finance, e-commerce and shopping malls have used our services.Electronic Certificate Provider',
                'stage' => 'Series A',
                'website_url' => 'http://privy.id',
                'image_path' => 'portfolios/01JHFBPHFNHAEZ1VXRQD05JKP1.png',
                'icon' => 'portfolios/01JHFEKXQH2NEJK11JTQTW4M6Y.png',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => 'Digital Signature',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'PTEN',
                'description' => 'PT Penyelesaian Transaksi Elektronik Nasional (PTEN) is a company that processes payments between merchant banks and card-issuing banks of buyers who use debit cards and "GPN" brand cards to make purchases in Indonesia.',
                'stage' => 'Growth',
                'website_url' => 'http://pten-indonesia.co.id',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Payment Solution',
                'portfolio_category_id' => $categoryIds[3],
            ],
            [
                'name' => 'Qoala',
                'description' => 'Qoala is an insurtech (insurance technology) company that gives you peace of mind from unexpected financial risks by making insurance more affordable in the easiest way.',
                'stage' => 'Growth',
                'website_url' => 'http://qoala.app',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Insurtech',
                'portfolio_category_id' => $categoryIds[3],
            ],
            [
                'name' => 'Sinbad',
                'description' => 'PT Sinbad Karya Perdagangan is a start-up B2B mobile marketplace company that connects distributors in Indonesia directly with outlets. Sinbad\'s mission is to maximize efficiency in the supply chain industry through technology.',
                'stage' => 'Growth',
                'website_url' => 'http://sinbad.co.id',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'B2B commerce',
                'portfolio_category_id' => $categoryIds[3],
            ],
            [
                'name' => 'Yokke',
                'description' => 'PT Mitra Transaksi Indonesia or also known by the trade name Yokke is a subsidiary of the Company where 99.9% share ownership is owned by the Company. PT Mitra Transaksi Indonesia (Yokke) is engaged in acquiring Aggregator business.',
                'stage' => 'Growth',
                'website_url' => 'http://yokke.co.id',
                'image_path' => '',
                'icon' => '',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Payment Solution',
                'portfolio_category_id' => $categoryIds[3],
            ],

        ];

        // Create or update portfolios with consistent category assignment
        foreach ($portfolios as $portfolio) {
            $slug = Str::slug($portfolio['name']);

            Portfolio::updateOrCreate(
                ['slug' => $slug],
                array_merge($portfolio, ['slug' => $slug])
            );
        }
    }
}
