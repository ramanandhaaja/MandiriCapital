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
                'description' => 'PT Agriaku Digital Indonesia is a leading local agribusiness company in Indonesia that bridges the needs of saprotan (agricultural production facilities) throughout Indonesia that can be ordered anytime and anywhere.',
                'stage' => 'Growth',
                'website_url' => 'https://agriaku.com/',
                'image_path' => 'portfolios/01JHFBJ1829J8ESAM1RRYJ7JMH.png',
                'icon' => 'portfolios/01JHFEEGQGZW2MS0GRPM776CGN.png',
                'highlight_image' => 'portfolios/01JK3KQRXBVSQE0H8KV54YEAK4.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'Agritech',
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => 'Jakarta',
                'order' => '1',
                'instagram_url' => 'https://www.instagram.com/agriakuid/',
                'linkedin_url' => 'https://www.linkedin.com/company/agriaku/',
            ],
            [
                'name' => 'Amartha',
                'description' => 'Amartha was born with the belief that everyone has the same opportunity to start and grow a business, including those who are less fortunate or unbankable. The Peer-to-peer (P2P) lending platform is here to connect micro and small businesses to access affordable financing capital with investors, who also prioritize impact and meaning in their investments.',
                'stage' => 'Growth',
                'website_url' => 'https://amartha.com/',
                'image_path' => 'portfolios/01JK314WEMAE87NFQN7R50J451.png',
                'icon' => 'portfolios/01JK314WENR1C17WH27V50MF7T.png',
                'highlight_image' => 'portfolios/01JK3KRMW24FARCFY9KN61CHBH.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2017',
                'sector' => 'P2P Lending',
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => 'Indonesia',
                'order' => '2',
                'instagram_url' => 'https://www.instagram.com/amarthaid/',
                'linkedin_url' => 'https://www.linkedin.com/company/amartha/'
            ],
            [
                'name' => 'Assist-X Enterprise',
                'description' => 'AssistX Enterprise is an AI Company that transform uncharted data into actionable insights across industries. Combine with our advanced data optimization technology, enabling smarter decision-making while increasing efficiency up to 10 times.',
                'stage' => 'Growth',
                'website_url' => 'https://assistxenterprise.ai/',
                'image_path' => 'portfolios/01JK3NHEATTXAZETG31RAZ6PS7.png',
                'icon' => 'portfolios/01JK3NHEAW7QJ0ETN3E007R1TK.png',
                'highlight_image' => 'portfolios/01JK3MYDX6BAC2Y3AJGB331S2V.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'AI',
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => 'Indonesia',
                'order' => '3',
                'instagram_url' => 'https://www.instagram.com/assistx_enterprise/',
                'linkedin_url' => 'https://www.linkedin.com/company/assistx-enterprise/'
            ],
            [
                'name' => 'Ayoconnect',
                'description' => 'Ayoconnect provides innovative solutions for both large enterprises and start-up businesses playing a crucial role in accelerating Indonesia\'s financial inclusion.',
                'stage' => 'Early Stage',
                'website_url' => 'https://www.ayoconnect.com/',
                'image_path' => 'portfolios/01JHFBJAYG9TB806HETC69VP29.png',
                'icon' => 'portfolios/01JHFEET5X1BQXF5GGM0GJ1Y1N.png',
                'highlight_image' => 'portfolios/01JK3KVQDXEN6G4EM7ZMP6YNEG.jpeg',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2021',
                'sector' => 'Open Banking',
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => 'Indonesia',
                'order' => '4',
                'instagram_url' => 'https://www.instagram.com/ayoconnect.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/ayoconnect/posts/?feedView=all'
            ],
            [
                'name' => 'Bukalapak',
                'description' => 'We envision a tech-enabled economy where people have the opportunity to grow, aided by our innovative online and offline platforms, because everyone deserves equal opportunities to create a better life.',
                'stage' => 'Early Stage',
                'website_url' => 'https://www.bukalapak.com/',
                'image_path' => 'portfolios/01JK313F4K202G9VH7PBPQEF5Q.png',
                'icon' => 'portfolios/01JK313F4MG0YBJ67FA0BTCZCM.png',
                'highlight_image' => 'portfolios/01JK3KW43817QWXKF0G8SZHMN2.jpeg',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2021',
                'sector' => 'e-commerce',
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => 'Indonesia',
                'order' => '5',
                'instagram_url' => 'https://www.instagram.com/bukalapak/',
                'linkedin_url' => 'https://www.linkedin.com/company/pt-bukalapak-com/posts/?feedView=all'
            ],
            [
                'name' => 'Cakap',
                'description' => 'Cakap is a rapidly growing Indonesian education company that utilizes technology to provide high-quality courses and reputable certifications, while also connecting qualified students with employers for upskilling purposes.',
                'stage' => 'Series B',
                'website_url' => 'https://cakap.com/',
                'image_path' => 'portfolios/01JK316EBT9SQA1F6ARJ1A1YJM.png',
                'icon' => 'portfolios/01JK316EBWTZ1EPC3YFA07Q3HT.png',
                'highlight_image' => 'portfolios/01JK3KWFD0KSSZVT4CPA9M1TMG.jpg',
                'ceo_name' => 'Michael Chen',
                'year_invested' => '2022',
                'sector' => 'Education',
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => 'Indonesia',
                'order' => '6',
                'instagram_url' => 'https://www.instagram.com/cakapcom/',
                'linkedin_url' => 'https://www.linkedin.com/company/cakap/'
            ],
            [
                'name' => 'Crowde',
                'description' => 'The agriculture sector in Indonesia faces significant challenges, including the need for technology integration, an aging farmer population, and rising unemployment in rural areas, leading to a substantial economic gap between rural and urban regions. Despite these issues, there is optimism about addressing these challenges by empowering small and medium-sized farms to grow their businesses and fostering community trust in agriculture. This approach aims to make Indonesia a global food hub.',
                'stage' => 'Series A',
                'website_url' => 'https://www.crowde.co/',
                'image_path' => 'portfolios/01JHFBM9477YPGDGKATKCYSFZ0.png',
                'icon' => 'portfolios/01JHFEJJGHA1NGY53SG54X6WGE.png',
                'highlight_image' => 'portfolios/01JK3KZ8ZKH9Z9W9HS5DWQSNVM.jpg',
                'ceo_name' => 'Dr. Siti Rahma',
                'year_invested' => '2019',
                'sector' => 'P2P Lending',
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => 'Indonesia',
                'order' => '7',
                'instagram_url' => 'https://www.instagram.com/temancrowde/',
                'linkedin_url' => 'https://www.linkedin.com/company/crowdeco/'
            ],
            [
                'name' => 'Delos',
                'description' => 'DELOS is a science-driven aqua-tech company seeking to disrupt the traditional and fragmented aquaculture industry in Indonesia, with eyes on South Asia as a whole.',
                'stage' => 'Growth',
                'website_url' => 'https://delosaqua.com/',
                'image_path' => 'portfolios/01JHFBMVCXWQXS08S2A8KNTXER.png',
                'icon' => 'portfolios/01JHFEJWG11VDYTNP8633Q4V89.png',
                'highlight_image' => 'portfolios/01JK3KZTDTFKD0Y03F07VE9Y8T.jpg',
                'ceo_name' => 'David Wong',
                'year_invested' => '2023',
                'sector' => 'Tech',
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => 'Indonesia',
                'order' => '8',
                'instagram_url' => 'https://www.instagram.com/delos.aqua/',
                'linkedin_url' => 'https://www.linkedin.com/company/delosaqua/'
            ],
            [
                'name' => 'FitAja',
                'description' => 'The SuperApp digital health platform, FitAja!, is designed to meet all user needs by providing access to various healthcare services in one app. It offers a range of features and conveniences for accessing healthcare services, from prevention to treatment, such as: online health consultations, digital prescriptions, medicine delivery, online insurance claim submissions, provider information, and many other useful features.',
                'stage' => 'Growth',
                'website_url' => 'https://www.fitaja.id/',
                'image_path' => 'portfolios/01JK3TY3A0DT102NAAN3AKDCZT.png',
                'icon' => 'portfolios/01JK3TY3A29AFQ5B038FQGN14H.png',
                'highlight_image' => 'portfolios/01JK3M04V0R411NSP4CVC1R3MM.png',
                'ceo_name' => 'David Wong',
                'year_invested' => '2022',
                'sector' => 'Health',
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => 'Indonesia',
                'order' => '9',
                'instagram_url' => 'https://www.instagram.com/fitaja.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/fitaja-digital-nusantara/'
            ],
            [
                'name' => 'Goto',
                'description' => 'GoTo is the largest digital ecosystem in Indonesia, with a mission to \'empower progress\' by offering technology infrastructure and solutions that help everyone to access and thrive in the digital economy. The GoTo ecosystem provides a wide range of services including mobility, food delivery, groceries and logistics, as well as payments, financial services, and technology solutions for merchants. The ecosystem also provides e-commerce services through Tokopedia and banking services through its partnership with Bank Jago.',
                'stage' => 'Series C',
                'website_url' => 'https://www.gotocompany.com/',
                'image_path' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'icon' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'highlight_image' => 'portfolios/01JK3MQ213AMZSJNWDT1N72M3J.jpeg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2020',
                'sector' => 'Tech transport, Bank, E-Commerce',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '10',
                'instagram_url' => 'https://www.instagram.com/gotoindonesia/',
                'linkedin_url' => 'https://www.linkedin.com/company/gotogroup/'
            ],
            [
                'name' => 'Greenhope',
                'description' => 'Redesign the Future Through Sustainable Bioplastic. By shifting to our novel materials at the upstream level, we can reduce greenhouse gas emissions and dangerous microplastics waste footprint, solving both climate and plastic waste pollution at scale.',
                'stage' => 'Series C',
                'website_url' => 'https://www.greenhope.co/',
                'image_path' => 'portfolios/01JK3NCD73DNS9X7PQ5ZC3QBQ3.png',
                'icon' => 'portfolios/01JK3NCD75VB46DA7KEFF3R6H1.png',
                'highlight_image' => 'portfolios/01JK3M9H5QZRX7GVEN0Z6ABYFN.jpg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'ESG',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '11',
                'instagram_url' => 'https://www.instagram.com/greenhope.co/',
                'linkedin_url' => 'https://www.linkedin.com/company/greenhope-co/'
            ],
            [
                'name' => 'Iseller',
                'description' => 'Integrated Digital Business Platform with the Most Complete Ecosystem. From small businesses to industrial giants, iSeller has the solution for your business system needs!',
                'stage' => 'Series B',
                'website_url' => 'https://iseller.id/',
                'image_path' => 'portfolios/01JK37R9VVC03A8KPPKF6KBK1F.png',
                'icon' => 'portfolios/01JK37R9VX0W9RA5R0M74DGCFW.png',
                'highlight_image' => 'portfolios/01JK3MA2KZATBDSWCP0HGC07J9.jpeg',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => 'ERP Saas',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '12',
                'instagram_url' => 'https://www.instagram.com/iseller.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/iseller/'
            ],
            [
                'name' => 'LinkAja',
                'description' => 'LinkAja! is Indonesia\'s proud server-based national electronic money which is the flagship product of PT Fintek Karya Nusantara (Finarya) which has been registered with Bank Indonesia.',
                'stage' => 'Series C',
                'website_url' => 'http://linkaja.id',
                'image_path' => 'portfolios/01JK30YHD9K9CKF841HMMW0F6G.png',
                'icon' => 'portfolios/01JK30YHDBV4VAHYQRC1QHSWY6.png',
                'highlight_image' => 'portfolios/01JK3MAJZD720MNDEVWW275TPK.jpg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2019',
                'sector' => 'E-wallet',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '13',
                'instagram_url' => 'https://www.instagram.com/linkaja/',
                'linkedin_url' => 'https://www.linkedin.com/company/linkaja/'
            ],
            [
                'name' => 'Mekari',
                'description' => 'Mekari is the number one Software-as-a-Service (SaaS) company in Indonesia. Mekari\'s mission is to empower professionals and business growth. Mekari has innovative HR and Accounting products (Talenta, Sleekr, Jurnal, KlikPajak) that have been used by thousands of businesses in Indonesia.',
                'stage' => 'Series C',
                'website_url' => 'http://mekari.com',
                'image_path' => 'portfolios/01JHFBQA9WPB01VRXCGGY1DRVC.png',
                'icon' => 'portfolios/01JHFEM8CSPZVF769HJ4MJMA0N.png',
                'highlight_image' => 'portfolios/01JK3MB2GGTWD518B2C13EYJV4.jpeg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2018',
                'sector' => 'ERP Saas',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '14',
                'instagram_url' => 'https://www.instagram.com/mekaricom/',
                'linkedin_url' => 'https://www.linkedin.com/company/mekari/'
            ],
            [
                'name' => 'PrivyID',
                'description' => 'PrivyID is a digital signature provider founded in 2016. In less than a year, Privyid has quickly turned into a major player in the industry by having the biggest companies in the telco industry, multi finance, e-commerce and shopping malls have used our services.Electronic Certificate Provider',
                'stage' => 'Series A',
                'website_url' => 'http://privy.id',
                'image_path' => 'portfolios/01JHFBPHFNHAEZ1VXRQD05JKP1.png',
                'icon' => 'portfolios/01JHFEKXQH2NEJK11JTQTW4M6Y.png',
                'highlight_image' => 'portfolios/01JK3MBSAKGJVVFZMWCV9B31DT.jpeg',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => 'Digital Signature',
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => 'Indonesia',
                'order' => '15',
                'instagram_url' => 'https://www.instagram.com/privyid/',
                'linkedin_url' => 'https://www.linkedin.com/company/privy-id/'
            ],
            [
                'name' => 'PTEN',
                'description' => 'PT Penyelesaian Transaksi Elektronik Nasional (PTEN) is a company that processes payments between merchant banks and card-issuing banks of buyers who use debit cards and "GPN" brand cards to make purchases in Indonesia.',
                'stage' => 'Growth',
                'website_url' => 'http://pten-indonesia.co.id',
                'image_path' => 'portfolios/01JK3ND0XS0SRJZ7P4A04CVBT9.png',
                'icon' => 'portfolios/01JK3ND0XTCHY9HAZJJJZ7PM80.png',
                'highlight_image' => 'portfolios/01JK3MCA9YVXWVT9VSQD02X5E2.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Payment Solution',
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => 'Indonesia',
                'order' => '16',
                'instagram_url' => 'https://www.instagram.com/pten.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/pten-indonesia/'
            ],
            [
                'name' => 'Qoala',
                'description' => 'Qoala is an insurtech (insurance technology) company that gives you peace of mind from unexpected financial risks by making insurance more affordable in the easiest way.',
                'stage' => 'Growth',
                'website_url' => 'http://qoala.app',
                'image_path' => 'portfolios/01JK3101G4S3GGPVE1FHQT7KNW.png',
                'icon' => 'portfolios/01JK3101G5N4BF8Q9MDK3RH471.png',
                'highlight_image' => 'portfolios/01JK3MCQQY7K8711TP5BMJR73T.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Insurtech',
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => 'Indonesia',
                'order' => '17',
                'instagram_url' => 'https://www.instagram.com/qoala.app/',
                'linkedin_url' => 'https://www.linkedin.com/company/qoala/'
            ],
            [
                'name' => 'Sinbad',
                'description' => 'PT Sinbad Karya Perdagangan is a start-up B2B mobile marketplace company that connects distributors in Indonesia directly with outlets. Sinbad\'s mission is to maximize efficiency in the supply chain industry through technology.',
                'stage' => 'Growth',
                'website_url' => 'http://sinbad.co.id',
                'image_path' => 'portfolios/01JK310Q1Z5JBTDH63DHS455PC.png',
                'icon' => 'portfolios/01JK310Q2044XRJRC6BJQFS0HN.png',
                'highlight_image' => 'portfolios/01JK3MD38C8H2Z4RNYP0WPXCB1.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'B2B commerce',
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => 'Indonesia',
                'order' => '18',
                'instagram_url' => 'https://www.instagram.com/sinbad.co.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/sinbad/'
            ],
            [
                'name' => 'Yokke',
                'description' => 'PT Mitra Transaksi Indonesia or also known by the trade name Yokke is a subsidiary of the Company where 99.9% share ownership is owned by the Company. PT Mitra Transaksi Indonesia (Yokke) is engaged in acquiring Aggregator business.',
                'stage' => 'Growth',
                'website_url' => 'http://yokke.co.id',
                'image_path' => 'portfolios/01JK3117HBB4BS879APNVY1JMV.png',
                'icon' => 'portfolios/01JK3117HCBE84R6015SSKMS5W.png',
                'highlight_image' => 'portfolios/01JK3MDEWWZYVMTNJZHF1GBVTB.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Payment Solution',
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => 'Indonesia',
                'order' => '19',
                'instagram_url' => 'https://www.instagram.com/yokke.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/yokke/'
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
