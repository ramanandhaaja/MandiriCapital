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
                'title' => 'AI',
                'slug' => 'ai',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHBNH1RXYHN5GPSQ7ETP4.png'
            ],
            [
                'title' => 'Tech Enabler',
                'slug' => 'tech-enabler',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHMAYKVVVJ9P22K6Q67GR.png'
            ],
            [
                'title' => 'Software as a Service (SaaS)',
                'slug' => 'software-as-a-service-saas',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JJ3RHWHM1EATFMPCGCR5TZY7.png'
            ],
        ];

        foreach ($datas as $data) {
            AboutPrioritySector::create($data);
        }
    }
}
