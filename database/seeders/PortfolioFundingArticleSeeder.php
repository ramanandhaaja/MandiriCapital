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
                'about_title' => [
                    'en' => "About Balance Sheet Fund",
                    'id' => "Tentang Dana Neraca Keuangan"
                ],
                'about_content_front' => [
                    'en' => "Mandiri Capital Indonesia (MCI), the Corporate Venture Capital arm of Mandiri Group, strategically invests in startups (both within Indonesia and globally) that offer innovative products or services capable of synergizing with Mandiri's ecosystem. Leveraging the Group's position as Indonesia's leading financial conglomerate, MCI empowers startups to scale efficiently and accelerate growth through access to Mandiri's extensive network, resources, and market expertise. By fostering strategic partnerships with forward-thinking ventures, MCI aims to co-create value, driving mutual growth while participating on the group's digital enhancement.",
                    'id' => "Mandiri Capital Indonesia (MCI), lengan Corporate Venture Capital dari Grup Mandiri, secara strategis berinvestasi pada startup (baik di Indonesia maupun global) yang menawarkan produk atau layanan inovatif yang mampu bersinergi dengan ekosistem Mandiri. Memanfaatkan posisi Grup sebagai konglomerat keuangan terkemuka di Indonesia, MCI memberdayakan startup untuk berkembang secara efisien dan mempercepat pertumbuhan melalui akses ke jaringan, sumber daya, dan keahlian pasar Mandiri yang luas. Dengan membina kemitraan strategis dengan usaha yang berwawasan ke depan, MCI bertujuan untuk menciptakan nilai bersama, mendorong pertumbuhan bersama sambil berpartisipasi dalam peningkatan digital grup."
                ],
                'about_content' => [
                    'en' => "Mandiri Capital Indonesia (MCI), the Corporate Venture Capital arm of Mandiri Group, strategically invests in startups (both within Indonesia and globally) that offer innovative products or services capable of synergizing with Mandiri's ecosystem. Leveraging the Group's position as Indonesia's leading financial conglomerate, MCI empowers startups to scale efficiently and accelerate growth through access to Mandiri's extensive network, resources, and market expertise. By fostering strategic partnerships with forward-thinking ventures, MCI aims to co-create value, driving mutual growth while participating on the group's digital enhancement.",
                    'id' => "Mandiri Capital Indonesia (MCI), lengan Corporate Venture Capital dari Grup Mandiri, secara strategis berinvestasi pada startup (baik di Indonesia maupun global) yang menawarkan produk atau layanan inovatif yang mampu bersinergi dengan ekosistem Mandiri. Memanfaatkan posisi Grup sebagai konglomerat keuangan terkemuka di Indonesia, MCI memberdayakan startup untuk berkembang secara efisien dan mempercepat pertumbuhan melalui akses ke jaringan, sumber daya, dan keahlian pasar Mandiri yang luas. Dengan membina kemitraan strategis dengan usaha yang berwawasan ke depan, MCI bertujuan untuk menciptakan nilai bersama, mendorong pertumbuhan bersama sambil berpartisipasi dalam peningkatan digital grup."
                ],
                'investment_thesis_title' => [
                    'en' => "Investment Thesis",
                    'id' => "Tesis Investasi"
                ],
                'investment_thesis_content' => [
                    'en' => "The fund focuses on identifying startups in Asia with potential strategic synergies with the Mandiri Group, prioritizing growth-stage to late-stage ventures that demonstrate robust business fundamentals, scalable models, and significant growth potential.",
                    'id' => "Fund ini fokus pada menentukan startup di Asia dengan potensi strategis bersamaan dengan Grup Mandiri, dengan prioritas untuk growth-stage hingga late-stage, yang memperlihatkan potensi bisnis yang kuat, model yang skalaable, dan potensi pertumbuhan yang signifikan."
                ],
                'investor_title' => [
                    'en' => "Investors",
                    'id' => "Pemegang Saham"
                ],
                'headline_title' => [
                    'en' => "Mandiri Group is the largest banking institution by asset value in Indonesia.",
                    'id' => "Mandiri Group adalah bank keuangan terbesar di Indonesia berdasarkan nilai aset."
                ],
                'headline_url' => 'portfolios/01JKXFQQHG6Q64SQ9ZYK5GS647.jpeg',
                'investor1_url' => 'portfolios/01JKXFQQHK2G4XZFRP0T5HVJ50.png',
                'investor2_url' => '',
                'investor3_url' => '',
                'investor4_url' => '',
                'investor5_url' => '',
                'investor6_url' => '',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQD9T5Z8WB3Q1JT81DRPHK.png',
                'order' => 1,
                'investment_criteria_title' => [
                    'en' => "Investment Criteria",
                    'id' => "Kriteria Investasi"
                ],
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
                    'en' => "Merah Putih Fund (MPF)",
                    'id' => "Fund Merah Putih (MPF)"
                ],
                'about_title' => [
                    'en' => "About Merah Putih Fund",
                    'id' => "Tentang Fund Merah Putih"
                ],
                'about_content_front' => [
                    'en' => "MCI, together with BRI Ventures, MDI Ventures, Telkomsel Ventures, and BNI Ventures, collaborates on the Merah Putih Fund. This initiative supports growth and late-stage startups, accelerating Indonesia's digital economy through strategic investments and collaborations.",
                    'id' => "MCI, bersama dengan BRI Ventures, MDI Ventures, Telkomsel Ventures, dan BNI Ventures, berkolaborasi dalam Dana Merah Putih. Inisiatif ini mendukung startup tahap pertumbuhan dan akhir, mempercepat ekonomi digital Indonesia melalui investasi dan kolaborasi strategis."
                ],
                'about_content' => [
                    'en' => "Merah Putih Fund focuses on accelerating the growth of Indonesia's digital economy, encouraging startups with the potential to become soonicorns to grow and contribute to Indonesia. <br><br> More than capital investment, Merah Putih Fund will integrate the businesses of its soonicorn investees in the BUMN business ecosystem.",
                    'id' => "Fund ini fokus pada menentukan startup di Asia dengan potensi strategis bersamaan dengan Grup Mandiri, dengan prioritas untuk growth-stage hingga late-stage, yang memperlihatkan potensi bisnis yang kuat, model yang skalaable, dan potensi pertumbuhan yang signifikan."
                ],
                'investment_thesis_title' => [
                    'en' => "Investment Thesis",
                    'id' => "Tesis Investasi"
                ],
                'investment_thesis_content' => [
                    'en' => "Focused on backing soonicorns—startups with high growth potential poised to scale. The fund primarily targets gowth-stage ventures in emerging sectors such as fintech, digital health, and sustainable solutions that can drive significant market disruption.",
                    'id' => ""
                ],
                'investor_title' => [
                    'en' => "Investors",
                    'id' => "Pemegang Saham"
                ],
                'headline_title' => [
                    'en' => "Indonesia is one of the digital economic powerhouses in Southeast Asia.",
                    'id' => "Indonesia adalah salah satu ekonomi digital yang kuat di Asia Tenggara."
                ],
                'headline_url' => 'portfolios/01JKXFZMPFD89W8T4JFRZRNM4X.jpeg',
                'investor1_url' => 'portfolios/01JKXHAPK8CQ1CV2ZTNG3QAXB5.png',
                'investor2_url' => 'portfolios/01JKXHAPKAHSSKDZ6Q4D4VYWYX.png',
                'investor3_url' => 'portfolios/01JKXHAPKBA9ZV4R3HWJ0TE5BX.png',
                'investor4_url' => 'portfolios/01JKXHAPKCP3924JQ2BFQWGQ7R.png',
                'investor5_url' => 'portfolios/01JKXHAPKDHBA8XB0T05DJ7BB7.png',
                'investor6_url' => '',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1RBGJ9EY8NK5M5A02K.png',
                'order' => 2,
                'investment_criteria_title' => [
                    'en' => "Investment Criteria",
                    'id' => "Kriteria Investasi"
                ],
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
                'about_title' => [
                    'en' => "About Indonesia Impact Fund",
                    'id' => "Tentang Dana Dampak Indonesia"
                ],
                'about_content_front' => [
                    'en' => "A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund (IIF) is the nation's first private impact investment fund. Focused on early-stage startups advancing the SDGs, IIF is driving Indonesia's journey toward a brighter, sustainable future.",
                    'id' => "Sebuah inisiatif bersama oleh MCI, ABAC Indonesia, dan UNDP Indonesia, Dana Dampak Indonesia (IIF) adalah dana investasi dampak swasta pertama di negara ini. Berfokus pada startup tahap awal yang memajukan SDGs, IIF mendorong perjalanan Indonesia menuju masa depan yang lebih cerah dan berkelanjutan."
                ],
                'about_content' => [
                    'en' => "Indonesia, Southeast Asia’s largest economy and a diverse nation of over 300 ethnic groups, is poised to absorb $23 billion in impact investments over the next five years, driven by Public-Private Partnership (PPP) projects and its underserved market potential.<br/><br/>The Indonesia Impact Fund fosters private sector investments in renewable energy, supporting COP26’s mission to achieve global net-zero emissions by mid-century and maintain the 1.5-degree target.<br/><br/>Amid challenges like natural resource degradation, ecological decline, and pandemic impacts, the fund drives public-private collaboration to protect lives, sustain livelihoods, and build a resilient, sustainable future.",
                    'id' => "Indonesia, ekonomi terbesar di Asia Tenggara dan negara yang beragam dengan lebih dari 300 kelompok etnis, siap menyerap investasi dampak sebesar $23 miliar dalam lima tahun ke depan, didorong oleh proyek Kemitraan Pemerintah-Swasta (KPS) dan potensi pasar yang belum terlayani.<br/><br/>Dana Dampak Indonesia mendorong investasi sektor swasta dalam energi terbarukan, mendukung misi COP26 untuk mencapai emisi nol bersih global pada pertengahan abad ini dan mempertahankan target 1,5 derajat.<br/><br/>Di tengah tantangan seperti degradasi sumber daya alam, penurunan ekologi, dan dampak pandemi, dana ini mendorong kolaborasi publik-swasta untuk melindungi kehidupan, mempertahankan mata pencaharian, dan membangun masa depan yang tangguh dan berkelanjutan."
                ],
                'investment_thesis_title' => [
                    'en' => "Investment Thesis",
                    'id' => "Tesis Investasi"
                ],
                'investment_thesis_content' => [
                    'en' => "Targeting startups that have a positive social or environmental impact, Indonesia Impact Fund focuses on businesses driving long-term sustainable change in sectors such as renewable energy, social infrastructure, and clean tech.",
                    'id' => "Menargetkan startup yang memiliki dampak sosial atau lingkungan positif, Dana Dampak Indonesia fokus pada bisnis yang menggerakkan perubahan berkelanjutan dalam sektor seperti energi terbarukan, infrastruktur sosial, dan teknologi bersih."
                ],
                'investor_title' => [
                    'en' => "Investors",
                    'id' => "Pemegang Saham"
                ],
                'headline_title' => [
                    'en' => "Enhancing Synergy Between Economic, Environment, and Social Facets",
                    'id' => "Mendorong sinergi antara ekonomi, lingkungan, dan fasososial"
                ],
                'headline_url' => 'portfolios/01JKXG0C88FE0KD3EZXQ2VSNCG.jpeg',
                'investor1_url' => 'portfolios/01JKXHQ7A62P9KAT0FTVP1BFY0.png',
                'investor2_url' => 'portfolios/01JKXHQ7A7RT94J85FM5B3EKKT.png',
                'investor3_url' => 'portfolios/01JKXHQ7A8P7P98T6EZ8W4E72E.png',
                'investor4_url' => '',
                'investor5_url' => '',
                'investor6_url' => '',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1PV4K9YBV43PRECCA4.png',
                'order' => 3,
                'investment_criteria_title' => [
                    'en' => "Investment Criteria",
                    'id' => "Kriteria Investasi"
                ],
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
                'about_title' => [
                    'en' => "About BTN Fund",
                    'id' => "Tentang Dana BTN"
                ],
                'about_content_front' => [
                    'en' => 'In partnership with Bank BTN, Indonesia’s largest mortgage bank, MCI launched the BTN Fund to fuel digital transformation and enhance the digital housing ecosystem. Targeting early to growth-stage startups, this fund focuses on proptech, fintech, SaaS, ESG, and other strategic sectors.',
                    'id' => 'Bermitra dengan Bank BTN, bank KPR terbesar di Indonesia, MCI meluncurkan Dana BTN untuk mendorong transformasi digital dan meningkatkan ekosistem perumahan digital. Menargetkan startup tahap awal hingga pertumbuhan, dana ini berfokus pada proptech, fintech, SaaS, ESG, dan sektor strategis lainnya.'
                ],
                'about_content' => [
                    'en' => "BTN Fund is a strategic initiative designed to accelerate innovation and growth in Indonesia's housing and property sectors. As a collaborative effort with Bank Tabungan Negara, the fund focuses on fostering partnerships with startups and businesses that drive technological advancements, improve housing accessibility, and promote sustainable urban development.<br/><br/>By supporting groundbreaking solutions and aligning with BTN’s mission to enhance the quality of housing in Indonesia, the BTN Fund empowers innovative ventures to create long-term impact while addressing critical challenges in the real estate ecosystem.",
                    'id' => "Dana BTN adalah inisiatif strategis yang dirancang untuk mempercepat inovasi dan pertumbuhan di sektor perumahan dan properti Indonesia. Sebagai upaya kolaboratif dengan Bank Tabungan Negara, dana ini berfokus pada membangun kemitraan dengan startup dan bisnis yang mendorong kemajuan teknologi, meningkatkan aksesibilitas perumahan, dan mempromosikan pembangunan perkotaan yang berkelanjutan.<br/><br/>Dengan mendukung solusi-solusi inovatif dan selaras dengan misi BTN untuk meningkatkan kualitas perumahan di Indonesia, Dana BTN memberdayakan usaha-usaha inovatif untuk menciptakan dampak jangka panjang sambil mengatasi tantangan-tantangan kritis dalam ekosistem real estate."
                ],
                'investment_thesis_title' => [
                    'en' => "Investment Thesis",
                    'id' => "Tesis Investasi"
                ],
                'investment_thesis_content' => [
                    'en' => "The BTN Fund seeks to invest in startups that promote financial inclusion and affordable housing solutions, aiming to support the development of sustainable urban communities and expand financial access across Indonesia.",
                    'id' => "Dana BTN berharap untuk berinvestasi dalam startup yang mengpromosikan inklusi finansial dan solusi perumahan yang murah, dengan tujuan untuk mendukung pertumbuhan komunitas perkotaan yang berkelanjutan dan memperluas akses finansial di Indonesia."
                ],
                'investor_title' => [
                    'en' => "Investors",
                    'id' => "Pemegang Saham"
                ],
                'headline_title' => [
                    'en' => "Supporting Digital Transformation for Investor Ecosystem",
                    'id' => "Mendorong transformasi digital untuk ekosistem pemegang saham"
                ],
                'headline_url' => 'portfolios/01JKXG4GGMT1BYMH5FZY1769BZ.png',
                'investor1_url' => 'portfolios/01JKXHTFSS3DSAG9AWHPTJPNV4.png',
                'investor2_url' => 'portfolios/01JKXHTFSVJZE4D3JN762BT370.png',
                'investor3_url' => '',
                'investor4_url' => '',
                'investor5_url' => '',
                'investor6_url' => '',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1QEJPRMP4HJACSFC5W.png',
                'order' => 4,
                'investment_criteria_title' => [
                    'en' => "Investment Criteria",
                    'id' => "Kriteria Investasi"
                ],
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
