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
                'title' => 'Software as a Service (SaaS)',
                'slug' => 'software-as-a-service-saas',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDMCX98D9P0902E2P23FXA2.png'
            ],
            [
                'title' => 'Deep Tech',
                'slug' => 'deep-tech',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDMCX98D9P0902E2P23FXA2.png'
            ],
            [
                'title' => 'Fintech',
                'slug' => 'fintech',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDMCX98D9P0902E2P23FXA2.png'
            ],
            [
                'title' => 'Value Chain',
                'slug' => 'value-chain',
                'content' => '',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDMCX98D9P0902E2P23FXA2.png'
            ]
        ];

        foreach ($datas as $data) {
            AboutPrioritySector::create($data);
        }
    }
}
