<?php

namespace Database\Seeders;

use App\Models\AboutMCIIntro;
use App\Models\AboutPrioritySector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AboutPrioritySectorSeeder extends Seeder
{
    public function run(): void
    {

        $intro = [

            [
                'intro' => [
                    'en' => "<p>At Mandiri Capital Indonesia (MCI), we're not just a venture capital firm—we're catalysts for rapid
                        innovation and sustainable growth. As the corporate venture capital arm of Bank Mandiri, we drive
                        transformative change by forging synergies across a dynamic ecosystem, empowering startups to scale,
                        and fostering impactful collaborations that fuel progress.</p>

                    <p>With a diverse portfolio of 23 startups and access to strategic funds such as the Balance Sheet Fund,
                        Indonesia Impact Fund, and Merah Putih Fund, MCI is leading the charge in shaping Indonesia's
                        digital innovation landscape.</p>

                    <p>Established in 2015 as the venture capital arm of PT Bank Mandiri (Persero) Tbk, MCI's core mission
                        has always been to unlock synergies that accelerate innovation. We don't just envision growth; we
                        make it happen—building a future of opportunity, resilience, and long-term success for both startups
                        and Indonesia's economy.</p>",
                    'id' => "<p>Di Mandiri Capital Indonesia (MCI), kami bukan sekadar perusahaan modal ventura—kami adalah katalis untuk
                        inovasi cepat dan pertumbuhan berkelanjutan. Sebagai lengan modal ventura korporasi Bank Mandiri, kami mendorong
                        perubahan transformatif dengan membangun sinergi di seluruh ekosistem yang dinamis, memberdayakan startup untuk berkembang,
                        dan membina kolaborasi berdampak yang mendorong kemajuan.</p>

                    <p>Dengan portofolio beragam dari 23 startup dan akses ke dana strategis seperti Balance Sheet Fund,
                        Indonesia Impact Fund, dan Merah Putih Fund, MCI memimpin dalam membentuk lanskap
                        inovasi digital Indonesia.</p>

                    <p>Didirikan pada tahun 2015 sebagai lengan modal ventura PT Bank Mandiri (Persero) Tbk, misi utama MCI
                        selalu untuk membuka sinergi yang mempercepat inovasi. Kami tidak hanya membayangkan pertumbuhan; kami
                        mewujudkannya—membangun masa depan peluang, ketahanan, dan kesuksesan jangka panjang bagi startup
                        dan ekonomi Indonesia.</p>"
                ],
                'headline' => [
                    'en' => "<p>Unlocking Startups'<br>Best Potential&nbsp;</p>",
                    'id' => "<p>Membuka Potensi<br>Terbaik Startup&nbsp;</p>"
                ],
                'articletitle1' => [
                    'en' => '<p>Building Synergy with Mandiri Ecosystem&nbsp;</p>',
                    'id' => '<p>Membangun Sinergi dengan Ekosistem Mandiri&nbsp;</p>'
                ],
                'articletitle2' => [
                    'en' => '<p>Nurturing Startup Fundamentals&nbsp;</p>',
                    'id' => '<p>Mengembangkan Fundamental Startup&nbsp;</p>'
                ],
                'articletitle3' => [
                    'en' => '<p>ESG Initiative&nbsp;</p>',
                    'id' => '<p>Inisiatif ESG&nbsp;</p>'
                ],
                'article1' => [
                    'en' => '<p>Empowering startups through strategic collaborations and resources.&nbsp;</p>',
                    'id' => '<p>Memberdayakan startup melalui kolaborasi dan sumber daya strategis.&nbsp;</p>'
                ],
                'article2' => [
                    'en' => '<p>Strengthening growth with expert mentorship and guidance.&nbsp;</p>',
                    'id' => '<p>Memperkuat pertumbuhan dengan bimbingan dan panduan ahli.&nbsp;</p>'
                ],
                'article3' => [
                    'en' => '<p>Promoting sustainable growth through responsible business practices.&nbsp;</p>',
                    'id' => '<p>Mendorong pertumbuhan berkelanjutan melalui praktik bisnis yang bertanggung jawab.&nbsp;</p>'
                ],
                'icon_article1' => 'hero-sections/01JKGQ1GKB8SKMJBRBHPP7562Q.png',
                'icon_article2' => 'hero-sections/01JKGQ1GKDAXCF8K538AQRPP87.png',
                'icon_article3' => 'hero-sections/01JKGQ1GKE3VVKMJ9Z152DR863.png',
            ]
        ];
        foreach ($intro as $data) {
            AboutMCIIntro::create($data);
        }

        $datas = [
            [
                'main_title' => [
                    'en' => 'Resilience',
                    'id' => 'Kekuatan'
                ],
                'title' => [
                    'en' => 'Thriving through challenges and staying adaptable.',
                    'id' => 'Bertahan melalui tantangan dan tetap adaptif.'
                ],
                'slug' => 'thriving-through-challenges-and-staying-adaptable',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHBNH1RXYHN5GPSQ7ETP4.png'
            ],
            [
                'main_title' => [
                    'en' => 'Integrity',
                    'id' => 'Integritas'
                ],
                'title' => [
                    'en' => 'Committing to high ethical standards in all actions.',
                    'id' => 'Bertekad untuk memenuhi standar etika yang tinggi dalam semua tindakan.'
                ],
                'slug' => 'committing-to-high-ethical-standards-in-all-actions',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHWHM1EATFMPCGCR5TZY7.png'
            ],
            [
                'main_title' => [
                    'en' => 'Quality',
                    'id' => 'Kualitas'
                ],
                'title' => [
                    'en' => 'Upholding the highest standards in every action.',
                    'id' => 'Menjunjung standar tertinggi dalam setiap tindakan.'
                ],
                'slug' => 'upholding-the-highest-standards-in-every-action',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ8RR7WXC6VNT7Y8M0D52BK0.png'
            ],
            [
                'main_title' => [
                    'en' => 'Collaboration',
                    'id' => 'Kemitraan'
                ],
                'title' => [
                    'en' => 'Growing together through teamwork and partnership.',
                    'id' => 'Berkembang bersama melalui kerja sama dan kemitraan.'
                ],
                'slug' => 'growing-together-through-teamwork-and-partnership',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHMAYKVVVJ9P22K6Q67GR.png'
            ],
        ];

        foreach ($datas as $data) {
            AboutPrioritySector::create($data);
        }
    }
}
