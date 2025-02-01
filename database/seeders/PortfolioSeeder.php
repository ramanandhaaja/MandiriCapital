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
                'description' => 'Sebagai platform online pembelajaran dua arah yang menghubungkan murid dan pengajar, Cakap membuat belajar bahasa asing dapat dilakukan di mana pun.',
                'stage' => 'Growth',
                'website_url' => 'https://techinnovators.com',
                'image_path' => 'portfolios/01JHFBJ1829J8ESAM1RRYJ7JMH.png',
                'icon' => 'portfolios/01JHFEEGQGZW2MS0GRPM776CGN.png',
                'ceo_name' => 'John Smith',
                'year_invested' => '2022',
                'sector' => 'Technology',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Ayoconnect',
                'description' => 'Ayoconnect menyediakan solusi inovatif baik untuk perusahaan besar maupun bisnis rintisan memainkan peran krusial dalam mengakselerasi inklusi finansial Indonesia.',
                'stage' => 'Early Stage',
                'website_url' => 'https://greenenergy.com',
                'image_path' => 'portfolios/01JHFBJAYG9TB806HETC69VP29.png',
                'icon' => 'portfolios/01JHFEET5X1BQXF5GGM0GJ1Y1N.png',
                'ceo_name' => 'Sarah Johnson',
                'year_invested' => '2023',
                'sector' => 'Energy',
                'portfolio_category_id' => $categoryIds[0],
            ],
            [
                'name' => 'Cakap',
                'description' => 'Sebagai platform online pembelajaran dua arah yang menghubungkan murid dan pengajar, Cakap membuat belajar bahasa asing dapat dilakukan di mana pun.',
                'stage' => 'Series B',
                'website_url' => 'https://fintechconnect.id',
                'image_path' => 'portfolios/01JHFBKPJ072QFZ7AVEWHR0YF8.png',
                'icon' => 'portfolios/01JHFEJ6K0JPTMW5W0YY8KF8FG.png',
                'ceo_name' => 'Michael Chen',
                'year_invested' => '2022',
                'sector' => 'Financial Technology',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Crowde',
                'description' => 'CROWDE adalah startup fintech yang berfokus dalam agrikultur yang memberdayakan petani Indonesia dengan teknologi dan modal. Ribuan petani dan investor sepanjang indonesia telah menaruh kepercayaan ke Crowde dengan mencapai apa yang belum bisa dilakukan sebelumnya. Sebuah ekosistem keuangan yang ramah dengan petani yang berhubungan dengan investor yang mencari pengembalian yang menarik dengan para petani yang berharap modal untuk bertumbuh, membuat lapangan pekerjaan, dan membantu komunitas lokal.',
                'stage' => 'Series A',
                'website_url' => 'https://healthtechid.com',
                'image_path' => 'portfolios/01JHFBM9477YPGDGKATKCYSFZ0.png',
                'icon' => 'portfolios/01JHFEJJGHA1NGY53SG54X6WGE.png',
                'ceo_name' => 'Dr. Siti Rahma',
                'year_invested' => '2023',
                'sector' => 'Healthcare',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Delos',
                'description' => 'DELOS adalah perusahaan aquatech yang didorong oleh ilmu pengetahuan yang berusaha mendisrupsi industri akuakultur tradisional dan terfragmentasi di Indonesia, dengan fokus ke Asia Selatan secara keseluruhan.',
                'stage' => 'Growth',
                'website_url' => 'https://edutech.co.id',
                'image_path' => 'portfolios/01JHFBMVCXWQXS08S2A8KNTXER.png',
                'icon' => 'portfolios/01JHFEJWG11VDYTNP8633Q4V89.png',
                'ceo_name' => 'David Wong',
                'year_invested' => '2021',
                'sector' => 'Education',
                'portfolio_category_id' => $categoryIds[1],
            ],
            [
                'name' => 'Goto',
                'description' => 'PT GoTo Gojek Tokopedia (sebelumnya PT Aplikasi Karya Anak Bangsa) adalah perusahaan teknologi Indonesia, dibentuk dari merger antara Gojek dan Tokopedia.',
                'stage' => 'Series C',
                'website_url' => 'https://logisticspro.id',
                'image_path' => 'portfolios/01JHFBNK4D6WNA4S292G1V7TPY.png',
                'icon' => 'portfolios/01JHFEK7132WWHB5M0ZJF7YEV5.png',
                'ceo_name' => 'Amanda Susanto',
                'year_invested' => '2022',
                'sector' => 'Logistics',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'Privy',
                'description' => 'PrivyID adalah penyedia tanda tangan digital yang didirikan pada tahun 2016. Dalam waktu kurang dari setahun, Privyid dengan cepat berubah menjadi pemain utama di industri ini dengan memiliki perusahaan terbesar di industri telco, multi finance, e-commerce dan pusat perbelanjaan telah menggunakan jasa kami.Penyelenggara Sertifikat Elektronik.',
                'stage' => 'Series A',
                'website_url' => 'https://cybersecid.com',
                'image_path' => 'portfolios/01JHFBPHFNHAEZ1VXRQD05JKP1.png',
                'icon' => 'portfolios/01JHFEKXQH2NEJK11JTQTW4M6Y.png',
                'ceo_name' => 'Budi Prakoso',
                'year_invested' => '2022',
                'sector' => 'Cybersecurity',
                'portfolio_category_id' => $categoryIds[2],
            ],
            [
                'name' => 'Mekari',
                'description' => 'Mekari adalah perusahaan Software-as-a-Service (SaaS) nomor satu di Indonesia. Misi Mekari adalah untuk memberdayakan profesional dan perkembangan bisnis. Mekari mempunyai produk HR dan Akunting yang inovatif (Talenta, Sleekr, Jurnal, KlikPajak) yang sudah digunakan oleh ribuan bisnis di Indonesia.',
                'stage' => 'Growth',
                'website_url' => 'https://cleanenergytech.id',
                'image_path' => 'portfolios/01JHFBQA9WPB01VRXCGGY1DRVC.png',
                'icon' => 'portfolios/01JHFEM8CSPZVF769HJ4MJMA0N.png',
                'ceo_name' => 'Linda Wijaya',
                'year_invested' => '2021',
                'sector' => 'Clean Energy',
                'portfolio_category_id' => $categoryIds[3],
            ],
            [
                'name' => 'Koinworks',
                'description' => 'KoinWorks adalah perusahaan Fintech Lending Indonesia yang melayani investasi online P2P Lending dengan machine learning yang inovatif, menghubungkan Investor dengan Peminjam dalam sebuah platform teknologi mutakhir.',
                'stage' => 'Series B',
                'website_url' => 'https://retailtech.co.id',
                'image_path' => 'portfolios/01JHFBR4KM9GBB9HMX8WYFSKDM.png',
                'icon' => 'portfolios/01JHFEMKTW0BZWA9W7EWHWPJ9G.png',
                'ceo_name' => 'Robert Tanjung',
                'year_invested' => '2023',
                'sector' => 'Retail Technology',
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
