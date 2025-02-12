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
            [
                'name' => [
                    'en' => 'Fintech',
                    'id' => 'Teknologi Keuangan'
                ],
                'slug' => 'fintech'
            ],
            [
                'name' => [
                    'en' => 'Unicorn',
                    'id' => 'Unicorn'
                ],
                'slug' => 'unicorn'
            ],
            [
                'name' => [
                    'en' => 'Enterprise',
                    'id' => 'Perusahaan'
                ],
                'slug' => 'enterprise'
            ],
            [
                'name' => [
                    'en' => 'Customer',
                    'id' => 'Pelanggan'
                ],
                'slug' => 'customer'
            ],
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
                'description' => [
                    'en' => 'PT Agriaku Digital Indonesia is a leading local agribusiness company in Indonesia that bridges the needs of saprotan (agricultural production facilities) throughout Indonesia that can be ordered anytime and anywhere.',
                    'id' => 'PT Agriaku Digital Indonesia adalah perusahaan agribisnis lokal terkemuka di Indonesia yang menjembatani kebutuhan saprotan (sarana produksi pertanian) di seluruh Indonesia yang dapat dipesan kapan saja dan di mana saja.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'https://agriaku.com/',
                'image_path' => 'portfolios/01JHFBJ1829J8ESAM1RRYJ7JMH.png',
                'icon' => 'portfolios/01JHFEEGQGZW2MS0GRPM776CGN.png',
                'highlight_image' => 'portfolios/01JK3KQRXBVSQE0H8KV54YEAK4.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'Agritech',
                    'id' => 'Teknologi Pertanian'
                ],
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => [
                    'en' => 'Jakarta',
                    'id' => 'Jakarta'
                ],
                'order' => '1',
                'instagram_url' => 'https://www.instagram.com/agriakuid/',
                'linkedin_url' => 'https://www.linkedin.com/company/agriaku/',
            ],
            [
                'name' => 'Amartha',
                'description' => [
                    'en' => 'Amartha was born with the belief that everyone has the same opportunity to start and grow a business, including those who are less fortunate or unbankable. The Peer-to-peer (P2P) lending platform is here to connect micro and small businesses to access affordable financing capital with investors, who also prioritize impact and meaning in their investments.',
                    'id' => 'Amartha lahir dengan keyakinan bahwa setiap orang memiliki kesempatan yang sama untuk memulai dan mengembangkan bisnis, termasuk mereka yang kurang beruntung atau unbankable. Platform pinjaman Peer-to-peer (P2P) hadir untuk menghubungkan usaha mikro dan kecil untuk mengakses modal pembiayaan yang terjangkau dengan investor, yang juga memprioritaskan dampak dan makna dalam investasi mereka.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'https://amartha.com/',
                'image_path' => 'portfolios/01JK314WEMAE87NFQN7R50J451.png',
                'icon' => 'portfolios/01JK314WENR1C17WH27V50MF7T.png',
                'highlight_image' => 'portfolios/01JK3KRMW24FARCFY9KN61CHBH.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2017',
                'sector' => [
                    'en' => 'P2P Lending',
                    'id' => 'Pinjaman P2P'
                ],
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '2',
                'instagram_url' => 'https://www.instagram.com/amarthaid/',
                'linkedin_url' => 'https://www.linkedin.com/company/amartha/'
            ],
            [
                'name' => 'Assist-X Enterprise',
                'description' => [
                    'en' => 'AssistX Enterprise is an AI Company that transform uncharted data into actionable insights across industries. Combine with our advanced data optimization technology, enabling smarter decision-making while increasing efficiency up to 10 times.',
                    'id' => 'AssistX Enterprise adalah Perusahaan AI yang mengubah data yang belum terpetakan menjadi wawasan yang dapat ditindaklanjuti di berbagai industri. Dikombinasikan dengan teknologi optimasi data canggih kami, memungkinkan pengambilan keputusan yang lebih cerdas sambil meningkatkan efisiensi hingga 10 kali lipat.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'https://assistxenterprise.ai/',
                'image_path' => 'portfolios/01JK3NHEATTXAZETG31RAZ6PS7.png',
                'icon' => 'portfolios/01JK3NHEAW7QJ0ETN3E007R1TK.png',
                'highlight_image' => 'portfolios/01JK3MYDX6BAC2Y3AJGB331S2V.jpeg',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'AI',
                    'id' => 'Kecerdasan Buatan'
                ],
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '3',
                'instagram_url' => 'https://www.instagram.com/assistx_enterprise/',
                'linkedin_url' => 'https://www.linkedin.com/company/assistx-enterprise/'
            ],
            [
                'name' => 'Ayoconnect',
                'description' => [
                    'en' => 'Ayoconnect provides innovative solutions for both large enterprises and start-up businesses playing a crucial role in accelerating Indonesia\'s financial inclusion.',
                    'id' => 'Ayoconnect menyediakan solusi inovatif bagi perusahaan besar dan bisnis start-up yang berperan penting dalam mempercepat inklusi keuangan Indonesia.'
                ],
                'stage' => [
                    'en' => 'Early Stage',
                    'id' => 'Tahap Awal'
                ],
                'website_url' => 'https://www.ayoconnect.com/',
                'image_path' => 'portfolios/01JHFBJAYG9TB806HETC69VP29.png',
                'icon' => 'portfolios/01JHFEET5X1BQXF5GGM0GJ1Y1N.png',
                'highlight_image' => 'portfolios/01JK3KVQDXEN6G4EM7ZMP6YNEG.jpeg',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'Open Banking',
                    'id' => 'Perbankan Terbuka'
                ],
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '4',
                'instagram_url' => 'https://www.instagram.com/ayoconnect.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/ayoconnect/posts/?feedView=all'
            ],
            [
                'name' => 'Bukalapak',
                'description' => [
                    'en' => 'We envision a tech-enabled economy where people have the opportunity to grow, aided by our innovative online and offline platforms, because everyone deserves equal opportunities to create a better life.',
                    'id' => 'Kami membayangkan ekonomi berbasis teknologi di mana orang memiliki kesempatan untuk berkembang, dibantu oleh platform online dan offline kami yang inovatif, karena setiap orang berhak mendapatkan kesempatan yang sama untuk menciptakan kehidupan yang lebih baik.'
                ],
                'stage' => [
                    'en' => 'Early Stage',
                    'id' => 'Tahap Awal'
                ],
                'website_url' => 'https://www.bukalapak.com/',
                'image_path' => 'portfolios/01JK313F4K202G9VH7PBPQEF5Q.png',
                'icon' => 'portfolios/01JK313F4MG0YBJ67FA0BTCZCM.png',
                'highlight_image' => 'portfolios/01JK3KW43817QWXKF0G8SZHMN2.jpeg',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'e-commerce',
                    'id' => 'e-commerce'
                ],
                'portfolio_category_id' => $categoryIds[0],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '5',
                'instagram_url' => 'https://www.instagram.com/bukalapak/',
                'linkedin_url' => 'https://www.linkedin.com/company/pt-bukalapak-com/posts/?feedView=all'
            ],
            [
                'name' => 'Cakap',
                'description' => [
                    'en' => 'Cakap is a rapidly growing Indonesian education company that utilizes technology to provide high-quality courses and reputable certifications, while also connecting qualified students with employers for upskilling purposes.',
                    'id' => 'Cakap adalah perusahaan pendidikan Indonesia yang berkembang pesat yang menggunakan teknologi untuk menyediakan kursus berkualitas tinggi dan sertifikasi yang terpercaya, serta menghubungkan siswa yang memenuhi syarat dengan pemberi kerja untuk tujuan pengembangan keterampilan.'
                ],
                'stage' => [
                    'en' => 'Series B',
                    'id' => 'Seri B'
                ],
                'website_url' => 'https://cakap.com/',
                'image_path' => 'portfolios/01JK316EBT9SQA1F6ARJ1A1YJM.png',
                'icon' => 'portfolios/01JK316EBWTZ1EPC3YFA07Q3HT.png',
                'highlight_image' => 'portfolios/01JK3KWFD0KSSZVT4CPA9M1TMG.jpg',
                'ceo_name' => 'Michael Chen',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'Education',
                    'id' => 'Pendidikan'
                ],
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '6',
                'instagram_url' => 'https://www.instagram.com/cakapcom/',
                'linkedin_url' => 'https://www.linkedin.com/company/cakap/'
            ],
            [
                'name' => 'Crowde',
                'description' => [
                    'en' => 'The agriculture sector in Indonesia faces significant challenges, including the need for technology integration, an aging farmer population, and rising unemployment in rural areas, leading to a substantial economic gap between rural and urban regions. Despite these issues, there is optimism about addressing these challenges by empowering small and medium-sized farms to grow their businesses and fostering community trust in agriculture. This approach aims to make Indonesia a global food hub.',
                    'id' => 'Sektor pertanian di Indonesia menghadapi tantangan signifikan, termasuk kebutuhan integrasi teknologi, populasi petani yang menua, dan meningkatnya pengangguran di daerah pedesaan, yang menyebabkan kesenjangan ekonomi yang signifikan antara daerah pedesaan dan perkotaan. Meskipun demikian, ada optimisme tentang menangani tantangan ini dengan memberdayakan petani kecil dan menengah untuk mengembangkan bisnis mereka dan membangun kepercayaan masyarakat terhadap pertanian. Pendekatan ini bertujuan untuk menjadikan Indonesia sebagai pusat makanan global.'
                ],
                'stage' => [
                    'en' => 'Series A',
                    'id' => 'Seri A'
                ],
                'website_url' => 'https://www.crowde.co/',
                'image_path' => 'portfolios/01JHFBM9477YPGDGKATKCYSFZ0.png',
                'icon' => 'portfolios/01JHFEJJGHA1NGY53SG54X6WGE.png',
                'highlight_image' => 'portfolios/01JK3KZ8ZKH9Z9W9HS5DWQSNVM.jpg',
                'ceo_name' => 'Dr. Siti Rahma',
                'year_invested' => '2019',
                'sector' => [
                    'en' => 'P2P Lending',
                    'id' => 'Pinjaman P2P'
                ],
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '7',
                'instagram_url' => 'https://www.instagram.com/temancrowde/',
                'linkedin_url' => 'https://www.linkedin.com/company/crowdeco/'
            ],
            [
                'name' => 'Delos',
                'description' => [
                    'en' => 'DELOS is a science-driven aqua-tech company seeking to disrupt the traditional and fragmented aquaculture industry in Indonesia, with eyes on South Asia as a whole.',
                    'id' => 'DELOS adalah perusahaan aqua-tech yang didorong oleh ilmu pengetahuan yang berusaha untuk mengganggu industri akuakultur tradisional dan terfragmentasi di Indonesia, dengan mata yang tertuju pada Asia Selatan secara keseluruhan.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'https://delosaqua.com/',
                'image_path' => 'portfolios/01JHFBMVCXWQXS08S2A8KNTXER.png',
                'icon' => 'portfolios/01JHFEJWG11VDYTNP8633Q4V89.png',
                'highlight_image' => 'portfolios/01JK3KZTDTFKD0Y03F07VE9Y8T.jpg',
                'ceo_name' => 'David Wong',
                'year_invested' => '2023',
                'sector' => [
                    'en' => 'Tech',
                    'id' => 'Teknologi'
                ],
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '8',
                'instagram_url' => 'https://www.instagram.com/delos.aqua/',
                'linkedin_url' => 'https://www.linkedin.com/company/delosaqua/'
            ],
            [
                'name' => 'FitAja',
                'description' => [
                    'en' => 'The SuperApp digital health platform, FitAja!, is designed to meet all user needs by providing access to various healthcare services in one app. It offers a range of features and conveniences for accessing healthcare services, from prevention to treatment, such as: online health consultations, digital prescriptions, medicine delivery, online insurance claim submissions, provider information, and many other useful features.',
                    'id' => 'Platform kesehatan digital SuperApp, FitAja!, dirancang untuk memenuhi semua kebutuhan pengguna dengan menyediakan akses ke berbagai layanan kesehatan dalam satu aplikasi. Ini menawarkan berbagai fitur dan kemudahan untuk mengakses layanan kesehatan, dari pencegahan hingga pengobatan, seperti: konsultasi kesehatan online, resep digital, pengiriman obat, pengajuan klaim asuransi online, informasi penyedia, dan banyak fitur lainnya yang berguna.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'https://www.fitaja.id/',
                'image_path' => 'portfolios/01JK3TY3A0DT102NAAN3AKDCZT.png',
                'icon' => 'portfolios/01JK3TY3A29AFQ5B038FQGN14H.png',
                'highlight_image' => 'portfolios/01JK3M04V0R411NSP4CVC1R3MM.png',
                'ceo_name' => 'David Wong',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'Health',
                    'id' => 'Kesehatan'
                ],
                'portfolio_category_id' => $categoryIds[1],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '9',
                'instagram_url' => 'https://www.instagram.com/fitaja.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/fitaja-digital-nusantara/'
            ],
            [
                'name' => 'Goto',
                'description' => [
                    'en' => 'GoTo is the largest digital ecosystem in Indonesia, with a mission to \'empower progress\' by offering technology infrastructure and solutions that help everyone to access and thrive in the digital economy. The GoTo ecosystem provides a wide range of services including mobility, food delivery, groceries and logistics, as well as payments, financial services, and technology solutions for merchants. The ecosystem also provides e-commerce services through Tokopedia and banking services through its partnership with Bank Jago.',
                    'id' => 'GoTo adalah ekosistem digital terbesar di Indonesia, dengan misi untuk \'memberdayakan kemajuan\' dengan menawarkan infrastruktur teknologi dan solusi yang membantu semua orang untuk mengakses dan berkembang dalam ekonomi digital. Ekosistem GoTo menyediakan berbagai layanan termasuk mobilitas, pengiriman makanan, grosir dan logistik, serta pembayaran, layanan keuangan, dan solusi teknologi untuk pedagang. Ekosistem ini juga menyediakan layanan e-commerce melalui Tokopedia dan layanan perbankan melalui kemitraannya dengan Bank Jago.'
                ],
                'stage' => [
                    'en' => 'Series C',
                    'id' => 'Seri C'
                ],
                'website_url' => 'https://www.gotocompany.com/',
                'image_path' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'icon' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'highlight_image' => 'portfolios/01JK3MQ213AMZSJNWDT1N72M3J.jpeg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2020',
                'sector' => [
                    'en' => 'Tech transport, Bank, E-Commerce',
                    'id' => 'Teknologi transportasi, Bank, E-Commerce'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '10',
                'instagram_url' => 'https://www.instagram.com/gotoindonesia/',
                'linkedin_url' => 'https://www.linkedin.com/company/gotogroup/'
            ],
            [
                'name' => 'Greenhope',
                'description' => [
                    'en' => 'Redesign the Future Through Sustainable Bioplastic. By shifting to our novel materials at the upstream level, we can reduce greenhouse gas emissions and dangerous microplastics waste footprint, solving both climate and plastic waste pollution at scale.',
                    'id' => 'Merancang Ulang Masa Depan Melalui Bioplastik Berkelanjutan. Dengan beralih ke bahan baru kami di tingkat hulu, kami dapat mengurangi emisi gas rumah kaca dan jejak sampah mikroplastik berbahaya, menyelesaikan baik perubahan iklim dan polusi sampah plastik pada skala besar.'
                ],
                'stage' => [
                    'en' => 'Series C',
                    'id' => 'Seri C'
                ],
                'website_url' => 'https://www.greenhope.co/',
                'image_path' => 'portfolios/01JK3NCD73DNS9X7PQ5ZC3QBQ3.png',
                'icon' => 'portfolios/01JK3NCD75VB46DA7KEFF3R6H1.png',
                'highlight_image' => 'portfolios/01JK3M9H5QZRX7GVEN0Z6ABYFN.jpg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'ESG',
                    'id' => 'ESG'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '11',
                'instagram_url' => 'https://www.instagram.com/greenhope.co/',
                'linkedin_url' => 'https://www.linkedin.com/company/greenhope-co/'
            ],
            [
                'name' => 'Iseller',
                'description' => [
                    'en' => 'Integrated Digital Business Platform with the Most Complete Ecosystem. From small businesses to industrial giants, iSeller has the solution for your business system needs!',
                    'id' => 'Platform Bisnis Digital Terintegrasi dengan Ekosistem Paling Lengkap. Dari bisnis kecil hingga raksasa industri, iSeller memiliki solusi untuk kebutuhan sistem bisnis Anda!'
                ],
                'stage' => [
                    'en' => 'Series B',
                    'id' => 'Seri B'
                ],
                'website_url' => 'https://iseller.id/',
                'image_path' => 'portfolios/01JK37R9VVC03A8KPPKF6KBK1F.png',
                'icon' => 'portfolios/01JK37R9VX0W9RA5R0M74DGCFW.png',
                'highlight_image' => 'portfolios/01JK3MA2KZATBDSWCP0HGC07J9.jpeg',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'ERP Saas',
                    'id' => 'ERP Saas'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '12',
                'instagram_url' => 'https://www.instagram.com/iseller.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/iseller/'
            ],
            [
                'name' => 'LinkAja',
                'description' => [
                    'en' => 'LinkAja! is Indonesia\'s proud server-based national electronic money which is the flagship product of PT Fintek Karya Nusantara (Finarya) which has been registered with Bank Indonesia.',
                    'id' => 'LinkAja! adalah uang elektronik nasional berbasis server yang bangga milik Indonesia yang merupakan produk unggulan dari PT Fintek Karya Nusantara (Finarya) yang telah terdaftar di Bank Indonesia.'
                ],
                'stage' => [
                    'en' => 'Series C',
                    'id' => 'Seri C'
                ],
                'website_url' => 'http://linkaja.id',
                'image_path' => 'portfolios/01JK30YHD9K9CKF841HMMW0F6G.png',
                'icon' => 'portfolios/01JK30YHDBV4VAHYQRC1QHSWY6.png',
                'highlight_image' => 'portfolios/01JK3MAJZD720MNDEVWW275TPK.jpg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2019',
                'sector' => [
                    'en' => 'E-wallet',
                    'id' => 'E-dompet'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '13',
                'instagram_url' => 'https://www.instagram.com/linkaja/',
                'linkedin_url' => 'https://www.linkedin.com/company/linkaja/'
            ],
            [
                'name' => 'Mekari',
                'description' => [
                    'en' => 'Mekari is the number one Software-as-a-Service (SaaS) company in Indonesia. Mekari\'s mission is to empower professionals and business growth. Mekari has innovative HR and Accounting products (Talenta, Sleekr, Jurnal, KlikPajak) that have been used by thousands of businesses in Indonesia.',
                    'id' => 'Mekari adalah perusahaan Software-as-a-Service (SaaS) nomor satu di Indonesia. Misi Mekari adalah memberdayakan profesional dan pertumbuhan bisnis. Mekari memiliki produk HR dan Akuntansi inovatif (Talenta, Sleekr, Jurnal, KlikPajak) yang telah digunakan oleh ribuan bisnis di Indonesia.'
                ],
                'stage' => [
                    'en' => 'Series C',
                    'id' => 'Seri C'
                ],
                'website_url' => 'http://mekari.com',
                'image_path' => 'portfolios/01JHFBQA9WPB01VRXCGGY1DRVC.png',
                'icon' => 'portfolios/01JHFEM8CSPZVF769HJ4MJMA0N.png',
                'highlight_image' => 'portfolios/01JK3MB2GGTWD518B2C13EYJV4.jpeg',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2018',
                'sector' => [
                    'en' => 'ERP Saas',
                    'id' => 'ERP Saas'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '14',
                'instagram_url' => 'https://www.instagram.com/mekaricom/',
                'linkedin_url' => 'https://www.linkedin.com/company/mekari/'
            ],
            [
                'name' => 'PrivyID',
                'description' => [
                    'en' => 'PrivyID is a digital signature provider founded in 2016. In less than a year, Privyid has quickly turned into a major player in the industry by having the biggest companies in the telco industry, multi finance, e-commerce and shopping malls have used our services.Electronic Certificate Provider',
                    'id' => 'PrivyID adalah penyedia tanda tangan digital yang didirikan pada tahun 2016. Dalam waktu kurang dari satu tahun, Privyid telah dengan cepat menjadi pemain utama di industri ini dengan memiliki perusahaan terbesar di industri telco, keuangan multi, e-commerce dan pusat perbelanjaan yang telah menggunakan layanan kami.Penyedia Sertifikat Elektronik'
                ],
                'stage' => [
                    'en' => 'Series A',
                    'id' => 'Seri A'
                ],
                'website_url' => 'http://privy.id',
                'image_path' => 'portfolios/01JHFBPHFNHAEZ1VXRQD05JKP1.png',
                'icon' => 'portfolios/01JHFEKXQH2NEJK11JTQTW4M6Y.png',
                'highlight_image' => 'portfolios/01JK3MBSAKGJVVFZMWCV9B31DT.jpeg',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => [
                    'en' => 'Digital Signature',
                    'id' => 'Tanda Tangan Digital'
                ],
                'portfolio_category_id' => $categoryIds[2],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '15',
                'instagram_url' => 'https://www.instagram.com/privyid/',
                'linkedin_url' => 'https://www.linkedin.com/company/privy-id/'
            ],
            [
                'name' => 'PTEN',
                'description' => [
                    'en' => 'PT Penyelesaian Transaksi Elektronik Nasional (PTEN) is a company that processes payments between merchant banks and card-issuing banks of buyers who use debit cards and "GPN" brand cards to make purchases in Indonesia.',
                    'id' => 'PT Penyelesaian Transaksi Elektronik Nasional (PTEN) adalah perusahaan yang memproses pembayaran antara bank pedagang dan bank penerbit kartu pembeli yang menggunakan kartu debit dan kartu merek "GPN" untuk melakukan pembelian di Indonesia.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'http://pten-indonesia.co.id',
                'image_path' => 'portfolios/01JK3ND0XS0SRJZ7P4A04CVBT9.png',
                'icon' => 'portfolios/01JK3ND0XTCHY9HAZJJJZ7PM80.png',
                'highlight_image' => 'portfolios/01JK3MCA9YVXWVT9VSQD02X5E2.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'Payment Solution',
                    'id' => 'Solusi Pembayaran'
                ],
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '16',
                'instagram_url' => 'https://www.instagram.com/pten.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/pten-indonesia/'
            ],
            [
                'name' => 'Qoala',
                'description' => [
                    'en' => 'Qoala is an insurtech (insurance technology) company that gives you peace of mind from unexpected financial risks by making insurance more affordable in the easiest way.',
                    'id' => 'Qoala adalah perusahaan insurtech (teknologi asuransi) yang memberikan Anda ketenangan pikiran dari risiko keuangan yang tidak terduga dengan membuat asuransi lebih terjangkau dengan cara yang paling mudah.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'http://qoala.app',
                'image_path' => 'portfolios/01JK3101G4S3GGPVE1FHQT7KNW.png',
                'icon' => 'portfolios/01JK3101G5N4BF8Q9MDK3RH471.png',
                'highlight_image' => 'portfolios/01JK3MCQQY7K8711TP5BMJR73T.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'Insurtech',
                    'id' => 'Insurtech'
                ],
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '17',
                'instagram_url' => 'https://www.instagram.com/qoala.app/',
                'linkedin_url' => 'https://www.linkedin.com/company/qoala/'
            ],
            [
                'name' => 'Sinbad',
                'description' => [
                    'en' => 'PT Sinbad Karya Perdagangan is a start-up B2B mobile marketplace company that connects distributors in Indonesia directly with outlets. Sinbad\'s mission is to maximize efficiency in the supply chain industry through technology.',
                    'id' => 'PT Sinbad Karya Perdagangan adalah perusahaan pasar mobile B2B yang menghubungkan distributor di Indonesia secara langsung dengan outlet. Misi Sinbad adalah untuk memaksimalkan efisiensi di industri rantai pasokan melalui teknologi.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'http://sinbad.co.id',
                'image_path' => 'portfolios/01JK310Q1Z5JBTDH63DHS455PC.png',
                'icon' => 'portfolios/01JK310Q2044XRJRC6BJQFS0HN.png',
                'highlight_image' => 'portfolios/01JK3MD38C8H2Z4RNYP0WPXCB1.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'B2B commerce',
                    'id' => 'Perdagangan B2B'
                ],
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'order' => '18',
                'instagram_url' => 'https://www.instagram.com/sinbad.co.id/',
                'linkedin_url' => 'https://www.linkedin.com/company/sinbad/'
            ],
            [
                'name' => 'Yokke',
                'description' => [
                    'en' => 'PT Mitra Transaksi Indonesia or also known by the trade name Yokke is a subsidiary of the Company where 99.9% share ownership is owned by the Company. PT Mitra Transaksi Indonesia (Yokke) is engaged in acquiring Aggregator business.',
                    'id' => 'PT Mitra Transaksi Indonesia atau juga dikenal dengan nama dagang Yokke adalah anak perusahaan dari Perusahaan di mana 99,9% kepemilikan saham dimiliki oleh Perusahaan. PT Mitra Transaksi Indonesia (Yokke) bergerak di bidang pengakuisisian bisnis Aggregator.'
                ],
                'stage' => [
                    'en' => 'Growth',
                    'id' => 'Tahap Pertumbuhan'
                ],
                'website_url' => 'http://yokke.co.id',
                'image_path' => 'portfolios/01JK3117HBB4BS879APNVY1JMV.png',
                'icon' => 'portfolios/01JK3117HCBE84R6015SSKMS5W.png',
                'highlight_image' => 'portfolios/01JK3MDEWWZYVMTNJZHF1GBVTB.jpeg',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => [
                    'en' => 'Payment Solution',
                    'id' => 'Solusi Pembayaran'
                ],
                'portfolio_category_id' => $categoryIds[3],
                'head_office' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
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
