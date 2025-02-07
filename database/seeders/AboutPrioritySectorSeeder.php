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
                'intro' => "<p>At Mandiri Capital Indonesia (MCI), we’re not just a venture capital firm—we’re catalysts for rapid
                        innovation and sustainable growth. As the corporate venture capital arm of Bank Mandiri, we drive
                        transformative change by forging synergies across a dynamic ecosystem, empowering startups to scale,
                        and fostering impactful collaborations that fuel progress.</p>

                    <p>With a diverse portfolio of 23 startups and access to strategic funds such as the Balance Sheet Fund,
                        Indonesia Impact Fund, and Merah Putih Fund, MCI is leading the charge in shaping Indonesia's
                        digital innovation landscape.</p>

                    <p>Established in 2015 as the venture capital arm of PT Bank Mandiri (Persero) Tbk, MCI’s core mission
                        has always been to unlock synergies that accelerate innovation. We don’t just envision growth; we
                        make it happen—building a future of opportunity, resilience, and long-term success for both startups
                        and Indonesia's economy.</p>",
                'headline' => "<p>Unlocking Startups'<br>Best Potential&nbsp;</p>",
                'articletitle1' => '<p>Building Synergy with Mandiri Ecosystem&nbsp;</p>',
                'articletitle2' => '<p>Nurturing Startup Fundamentals&nbsp;</p>',
                'articletitle3' => '<p>ESG Initiative&nbsp;</p>',
                'article1' => '<p>Empowering startups through strategic collaborations and resources.&nbsp;</p>',
                'article2' => '<p>Strengthening growth with expert mentorship and guidance.&nbsp;</p>',
                'article3' => '<p>Promoting sustainable growth through responsible business practices.&nbsp;</p>',
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
                'title' => 'Thriving through challenges and staying adaptable.',
                'slug' => 'thriving-through-challenges-and-staying-adaptable',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHBNH1RXYHN5GPSQ7ETP4.png'
            ],
            [
                'title' => 'Growing together through teamwork and partnership.',
                'slug' => 'growing-together-through-teamwork-and-partnership',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHMAYKVVVJ9P22K6Q67GR.png'
            ],
            [
                'title' => 'Committing to high ethical standards in all actions.',
                'slug' => 'committing-to-high-ethical-standards-in-all-actions',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHWHM1EATFMPCGCR5TZY7.png'
            ],
            [
                'title' => 'Upholding the highest standards in every action.',
                'slug' => 'upholding-the-highest-standards-in-every-action',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ8RR7WXC6VNT7Y8M0D52BK0.png'
            ],
        ];

        foreach ($datas as $data) {
            AboutPrioritySector::create($data);
        }
    }
}
