<?php

namespace Database\Seeders;

use App\Models\PortfolioFundingArticle;
use App\Models\PortfolioFundingArticleSub;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioFundingArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First Article - Here's how we'll help
        $firstArticle = [
            [
                'title' => [
                    'en' => "Balance Sheet",
                    'id' => "Neraca Keuangan"
                ],
                'content' => [
                    'en' => '',
                    'id' => ''
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => "Venture Fund",
                    'id' => "Dana Ventura"
                ],
                'content' => [
                    'en' => '',
                    'id' => ''
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($firstArticle as $article) {
            PortfolioFundingArticle::updateOrCreate(
                $article
            );
        }



        // Sub-articles for first article
        $secondArticle = [
            [
                'article_id' => 1,
                'title' => [
                    'en' => "Balance Sheet Fund",
                    'id' => "Dana Neraca Keuangan"
                ],
                'content' => [
                    'en' => "Mandiri Capital Indonesia (MCI), the Corporate Venture Capital arm of Mandiri Group, strategically invests in startups (both within Indonesia and globally) that offer innovative products or services capable of synergizing with Mandiri's ecosystem. Leveraging the Group's position as Indonesia's leading financial conglomerate, MCI empowers startups to scale efficiently and accelerate growth through access to Mandiri's extensive network, resources, and market expertise. By fostering strategic partnerships with forward-thinking ventures, MCI aims to co-create value, driving mutual growth while participating on the group's digital enhancement.",
                    'id' => "Mandiri Capital Indonesia (MCI), lengan Corporate Venture Capital dari Grup Mandiri, secara strategis berinvestasi pada startup (baik di Indonesia maupun global) yang menawarkan produk atau layanan inovatif yang mampu bersinergi dengan ekosistem Mandiri. Memanfaatkan posisi Grup sebagai konglomerat keuangan terkemuka di Indonesia, MCI memberdayakan startup untuk berkembang secara efisien dan mempercepat pertumbuhan melalui akses ke jaringan, sumber daya, dan keahlian pasar Mandiri yang luas. Dengan membina kemitraan strategis dengan usaha yang berwawasan ke depan, MCI bertujuan untuk menciptakan nilai bersama, mendorong pertumbuhan bersama sambil berpartisipasi dalam peningkatan digital grup."
                ],
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQD9T5Z8WB3Q1JT81DRPHK.png',
                'order' => 1,
                'stage' => [
                    'en' => 'Growth to Late Stage',
                    'id' => 'Tahap Pertumbuhan hingga Akhir'
                ],
                'geography' => [
                    'en' => 'Asia Region',
                    'id' => 'Wilayah Asia'
                ],
                'ticketsize' => [
                    'en' => 'Above 2 Mn USD',
                    'id' => 'Di atas 2 Juta USD'
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => 'Merah Putih Fund (MPF)',
                    'id' => 'Dana Merah Putih (MPF)'
                ],
                'content' => [
                    'en' => "MCI, together with BRI Ventures, MDI Ventures, Telkomsel Ventures, and BNI Ventures, collaborates on the Merah Putih Fund. This initiative supports growth and late-stage startups, accelerating Indonesia's digital economy through strategic investments and collaborations.",
                    'id' => "MCI, bersama dengan BRI Ventures, MDI Ventures, Telkomsel Ventures, dan BNI Ventures, berkolaborasi dalam Dana Merah Putih. Inisiatif ini mendukung startup tahap pertumbuhan dan akhir, mempercepat ekonomi digital Indonesia melalui investasi dan kolaborasi strategis."
                ],
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1RBGJ9EY8NK5M5A02K.png',
                'order' => 2,
                'stage' => [
                    'en' => 'Growth to Late Stage',
                    'id' => 'Tahap Pertumbuhan hingga Akhir'
                ],
                'geography' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'ticketsize' => [
                    'en' => '20-25 Mn USD',
                    'id' => '20-25 Juta USD'
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => "Indonesia Impact Fund (IIF)",
                    'id' => "Dana Dampak Indonesia (IIF)"
                ],
                'content' => [
                    'en' => "A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund (IIF) is the nation's first private impact investment fund. Focused on early-stage startups advancing the SDGs, IIF is driving Indonesia's journey toward a brighter, sustainable future.",
                    'id' => "Sebuah inisiatif bersama oleh MCI, ABAC Indonesia, dan UNDP Indonesia, Dana Dampak Indonesia (IIF) adalah dana investasi dampak swasta pertama di negara ini. Berfokus pada startup tahap awal yang memajukan SDGs, IIF mendorong perjalanan Indonesia menuju masa depan yang lebih cerah dan berkelanjutan."
                ],
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1PV4K9YBV43PRECCA4.png',
                'order' => 3,
                'stage' => [
                    'en' => 'Early Stage',
                    'id' => 'Tahap Awal'
                ],
                'geography' => [
                    'en' => 'Indonesia',
                    'id' => 'Indonesia'
                ],
                'ticketsize' => [
                    'en' => '500k USD',
                    'id' => '500k USD'
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => 2,
                'title' => [
                    'en' => "BTN Fund",
                    'id' => "Dana BTN"
                ],
                'content' => [
                    'en' => 'In partnership with Bank BTN, Indonesia’s largest mortgage bank, MCI launched the BTN Fund to fuel digital transformation and enhance the digital housing ecosystem. Targeting early to growth-stage startups, this fund focuses on proptech, fintech, SaaS, ESG, and other strategic sectors.',
                    'id' => 'Bermitra dengan Bank BTN, bank KPR terbesar di Indonesia, MCI meluncurkan Dana BTN untuk mendorong transformasi digital dan meningkatkan ekosistem perumahan digital. Menargetkan startup tahap awal hingga pertumbuhan, dana ini berfokus pada proptech, fintech, SaaS, ESG, dan sektor strategis lainnya.'
                ],
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1QEJPRMP4HJACSFC5W.png',
                'order' => 4,
                'stage' => [
                    'en' => 'Early to Growth Stage',
                    'id' => 'Tahap Awal hingga Pertumbuhan'
                ],
                'geography' => [
                    'en' => 'Indonesia and Southeast Asia',
                    'id' => 'Indonesia dan Asia Tenggara'
                ],
                'ticketsize' => [
                    'en' => '1-2 Mn USD',
                    'id' => '1-2 Juta USD'
                ],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($secondArticle as $article) {
            PortfolioFundingArticleSub::updateOrCreate(
                $article
            );
        }

    }
}
