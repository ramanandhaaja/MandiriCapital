<?php

namespace Database\Seeders;

use App\Models\PortfolioArticle;
use App\Models\PortfolioArticleSub;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First Article - Why MCI
        $firstArticle = [
            [
                'title' => [
                    'en' => 'Why MCI',
                    'id' => 'Mengapa MCI'
                ],
                'content' => [
                    'en' => '',  // This section appears to only have a title in the screenshot
                    'id' => ''
                ],
                'title_sub' => [
                    'en' => '',
                    'id' => ''
                ],
                'content_sub' => [
                    'en' => '',
                    'id' => ''
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => "Here's how we'll help you achieve that growth",
                    'id' => "Berikut cara kami membantu Anda mencapai pertumbuhan itu"
                ],
                'content' => [
                    'en' => '"At Mandiri Capital Indonesia, we believe in investing in businesses, not just funding rounds. This means we\'re here to support you throughout your journey—from the spark of an idea to scaling into a successful, impactful enterprise.\n\nAs part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you grow and thrive at every stage."',
                    'id' => '"Di Mandiri Capital Indonesia, kami percaya pada berinvestasi di bisnis, bukan hanya putaran pendanaan. Ini berarti kami ada di sini untuk mendukung Anda sepanjang perjalanan Anda—dari percikan ide hingga menskala menjadi perusahaan yang sukses dan berdampak.\n\nSebagai bagian dari Grup Mandiri, kami membawa sumber daya, keahlian, dan koneksi yang tak tertandingi untuk membantu Anda tumbuh dan berkembang di setiap tahap."'
                ],
                'title_sub' => [
                    'en' => '',
                    'id' => ''
                ],
                'content_sub' => [
                    'en' => '',
                    'id' => ''
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ];

        foreach ($firstArticle as $article) {
            PortfolioArticle::updateOrCreate(
                $article
            );
        }


        // Second Article - Here's how we'll help
        $secondArticle = [
            [
                'article_id' => 1,
                'title' => [
                    'en' => "Diverse Opportunities Within Mandiri Group",
                    'id' => "Peluang Beragam dalam Grup Mandiri"
                ],
                'content' => [
                    'en' => "With Mandiri Group’s extensive business ecosystem, startups gain unparalleled access to a wide range of sectors that allows you to explore synergies, scale your solutions, and tap into endless growth opportunities.",
                    'id' => "Dengan ekosistem bisnis Grup Mandiri yang luas, startup mendapatkan akses tak tertandingi ke berbagai sektor yang memungkinkan Anda menjelajahi sinergi, menskala solusi Anda, dan mengetuk peluang pertumbuhan tanpa batas."
                ],
                'icon' => 'portfolios/01JHFA4PAR27040W6Q0V29TRMM.png',
                'text_icon' => '',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 1,
                'title' => [
                    'en' => 'Expert Guidance and Mentorship',
                    'id' => 'Bimbingan dan Mentorship Ahli'
                ],
                'content' => [
                    'en' => "We don't just invest; we partner with you on your journey. MCI provides tailored guidance, strategic mentorship, and access to industry expertise to help your startup overcome challenges and unlock its full potential.",
                    'id' => "Kami tidak hanya berinvestasi; kami bermitra dengan Anda dalam perjalanan Anda. MCI menyediakan bimbingan yang disesuaikan, mentorship strategis, dan akses ke keahlian industri untuk membantu startup Anda mengatasi tantangan dan membuka potensi penuhnya."
                ],
                'icon' => 'portfolios/01JHFA58K19B6J9T4D8HNW1XCE.png',
                'text_icon' => '',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 1,
                'title' => [
                    'en' => 'Focus on ESG Impact',
                    'id' => 'Fokus pada Dampak ESG'
                ],
                'content' => [
                    'en' => 'We actively champion on ESG initiatives, ensuring that your startup can grow responsibly while making a positive on society and the environment.',
                    'id' => 'Kami secara aktif menjadi juara inisiatif ESG, memastikan bahwa startup Anda dapat tumbuh secara bertanggung jawab sambil membuat dampak positif pada masyarakat dan lingkungan.'
                ],
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => "Tailored Value Creation Programs",
                    'id' => "Program Pembuatan Nilai yang Disesuaikan"
                ],
                'content' => [
                    'en' => 'We’ve designed programs like Sandbox, Matchmaking, and Networking to provide startups with structured opportunities to test ideas, forge meaningful connections, and access new markets. These initiatives are designed to create tangible impact and drive measurable growth.',
                    'id' => 'Kami telah merancang program seperti Sandbox, Matchmaking, dan Networking untuk memberikan startup kesempatan terstruktur untuk menguji ide, membangun koneksi yang bermakna, dan mengakses pasar baru. Inisiatif ini dirancang untuk menciptakan dampak yang nyata dan mendorong pertumbuhan yang terukur.'
                ],
                'icon' => 'portfolios/01JHFA4PAR27040W6Q0V29TRMM.png',
                'text_icon' => '',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => 'Sector-Focused Expertise',
                    'id' => 'Keahlian yang Berfokus pada Sektor'
                ],
                'content' => [
                    'en' => 'Our priority sectors align with high-growth opportunities, offering startups the added value of deep industry insights and tailored support. By focusing on these areas, we help you leverage your strengths and scale effectively.',
                    'id' => 'Sektor prioritas kami sejalan dengan peluang pertumbuhan tinggi, menawarkan startup nilai tambah dari wawasan industri yang mendalam dan dukungan yang disesuaikan. Dengan fokus pada area ini, kami membantu Anda memanfaatkan kekuatan Anda dan menskala secara efektif.'
                ],
                'icon' => 'portfolios/01JHFA58K19B6J9T4D8HNW1XCE.png',
                'text_icon' => '',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => 'Strategic Growth Support',
                    'id' => 'Dukungan Pertumbuhan Strategis'
                ],
                'content' => [
                    'en' => 'Throughout the investment period, we offer hands-on support, strategic insights, and access to industry experts. Our goal is to help you overcome challenges, optimize your strategies, and scale your business effectively.',
                    'id' => 'Selama periode investasi, kami menawarkan dukungan tangan, wawasan strategis, dan akses ke ahli industri. Tujuan kami adalah membantu Anda mengatasi tantangan, mengoptimalkan strategi Anda, dan menskala bisnis Anda secara efektif.'
                ],
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => 'Access to a Global Network',
                    'id' => 'Akses ke Jaringan Global'
                ],
                'content' => [
                    'en' => 'Tap into a vast network of investors, venture capitalists, private equities, and potential acquiring companies. We don’t just invest—we prepare you to be the next big player in the market, positioning you as a pipeline for global opportunities.',
                    'id' => 'Ketuk ke dalam jaringan luas investor, perusahaan modal ventura, ekuitas swasta, dan perusahaan yang berpotensi mengakuisisi. Kami tidak hanya berinvestasi—kami mempersiapkan Anda untuk menjadi pemain besar berikutnya di pasar, memposisikan Anda sebagai pipa untuk peluang global.'
                ],
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($secondArticle as $article) {
            PortfolioArticleSub::updateOrCreate(
                $article
            );
        }



        /*
        // Third Article - Investment Process
        $thirdArticleId = DB::table('portfolio_articles')->insertGetId([
            'title' => [
                'en' => 'What are we currently looking for?',
                'id' => 'Apa yang kami cari saat ini?'
            ],
            'content' => [
                'en' => '',  // This section appears to only have a title
                'id' => ''
            ],
            'title_sub' => [
                'en' => 'Are you innovating in any of these industries? ',
                'id' => 'Apakah Anda berinovasi di salah satu industri ini? '
            ],
            'content_sub' => [
                'en' => 'Send your business proposal and join us in shaping the future of these sectors!',
                'id' => 'Kirimkan proposal bisnis Anda dan bergabunglah dengan kami dalam membentuk masa depan sektor-sektor ini!'
            ],
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-articles for Investment Process
        DB::table('portfolio_articles_sub')->insert([
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Embedded Finance',
                    'id' => 'Keuangan Tersemat'
                ],
                'content' => [
                    'en' => 'Harness the power of AI to drive cost efficiency and increase productivity with solutions that include generative AI, knowledge management systems, data management and personalization.',
                    'id' => 'Manfaatkan kekuatan AI untuk menggerakkan efisiensi biaya dan meningkatkan produktivitas dengan solusi yang mencakup AI generatif, sistem manajemen pengetahuan, manajemen data dan personalisasi.'
                ],
                'icon' => '',
                'text_icon' => '01',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Health & Wellness',
                    'id' => 'Kesehatan & Kesejahteraan'
                ],
                'content' => [
                    'en' => 'Elevates well-being with holistic products and dynamic wellness solutions that empower employees through personal development and lifestyle enhancement.',
                    'id' => 'Meningkatkan kesejahteraan dengan produk holistik dan solusi kesejahteraan dinamis yang memberdayakan karyawan melalui pengembangan pribadi dan peningkatan gaya hidup.'
                ],
                'icon' => '',
                'text_icon' => '02',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Wealth Management',
                    'id' => 'Manajemen Kekayaan'
                ],
                'content' => [
                    'en' => 'Offers innovative, tailored solutions to empower high-net-worth clients with cutting-edge, personalized solutions to maximize and leverage their wealth.',
                    'id' => 'Menawarkan solusi inovatif yang disesuaikan untuk memberdayakan klien berkepemilikan tinggi dengan solusi pribadi yang berbasis teknologi canggih untuk memaksimalkan dan memanfaatkan kekayaan mereka.'
                ],
                'icon' => '',
                'text_icon' => '03',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Financial Technology',
                    'id' => 'Teknologi Keuangan'
                ],
                'content' => [
                    'en' => 'Revolutionize financial services with tech-driven solutions like SaaS platforms, online payments, and cash collection systems to enhance efficiency and user experience.',
                    'id' => 'Mengubah jasa keuangan dengan solusi yang digerakkan teknologi seperti platform SaaS, pembayaran online, dan sistem pengumpulan uang tunai untuk meningkatkan efisiensi dan pengalaman pengguna.'
                ],
                'icon' => '',
                'text_icon' => '04',
                'order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Value Chain Enabler',
                    'id' => 'Pengaktif Rantai Nilai'
                ],
                'content' => [
                    'en' => 'Leverage the ecosystem with cross-product opportunities across sectors such as lifestyle, FMCG, health, education, cash collection, and transportation, fostering collaboration and growth.',
                    'id' => 'Manfaatkan ekosistem dengan peluang lintas produk di berbagai sektor seperti gaya hidup, FMCG, kesehatan, pendidikan, pengumpulan uang tunai, dan transportasi, memfasilitasi kolaborasi dan pertumbuhan.'
                ],
                'icon' => '',
                'text_icon' => '05',
                'order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => [
                    'en' => 'Property Tech & Asset Management',
                    'id' => 'Teknologi Properti & Manajemen Aset'
                ],
                'content' => [
                    'en' => 'Enhances efficiency and financial recovery with smart solutions for distressed asset liquidation, product bundling for wealth customers, and idle asset management.',
                    'id' => 'Meningkatkan efisiensi dan pemulihan keuangan dengan solusi cerdas untuk likuidasi aset yang terganggu, penggabungan produk untuk pelanggan kaya, dan manajemen aset yang tidak aktif.'
                ],
                'icon' => '',
                'text_icon' => '06',
                'order' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]); */
    }
}
