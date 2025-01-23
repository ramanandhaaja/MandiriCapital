<?php

namespace Database\Seeders;

use App\Models\AboutPrioritySector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AboutPrioritySectorSeeder extends Seeder
{
    public function run(): void
    {

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
