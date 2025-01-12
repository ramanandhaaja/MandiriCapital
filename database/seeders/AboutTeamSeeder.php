<?php

namespace Database\Seeders;

use App\Models\AboutTeam;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutTeamSeeder extends Seeder
{
    public function run(): void
    {
        $datas = [
            [
                'name' => 'John Anderson',
                'title' => 'Chief Executive Officer',
                'content' => 'Experienced leader with over 20 years in investment banking and venture capital.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDVAPS9GA10GG0T4W51JZTV.png'
            ],
            [
                'name' => 'Sarah Chen',
                'title' => 'Chief Investment Officer',
                'content' => 'Former Goldman Sachs executive with expertise in emerging markets and tech investments.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDVDG5N4SF6YE7BDRGART96.png'
            ],
            [
                'name' => 'Michael Rodriguez',
                'title' => 'Chief Technology Officer',
                'content' => 'Tech veteran with background in fintech innovation and digital transformation.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDVDTNSDMDEMFF6SJXRT0GY.png'
            ],
            [
                'name' => 'Emily Wong',
                'title' => 'Chief Financial Officer',
                'content' => 'Certified accountant with extensive experience in corporate finance and M&A.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDVEYKJ3MT45KDF9SWJ505R.png'
            ],
            [
                'name' => 'David Park',
                'title' => 'Chief Operating Officer',
                'content' => 'Operations expert specializing in scaling venture capital firms and startups.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDVF6R815T4YYREM37XMFRQ.png'
            ]
        ];

        foreach ($datas as $data) {
            AboutTeam::create($data);
        }
    }
}
