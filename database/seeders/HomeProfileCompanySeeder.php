<?php

namespace Database\Seeders;

use App\Models\HomeProfileCompany;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomeProfileCompanySeeder extends Seeder
{
    public function run(): void
    {
        $profiles = [
            [
                'company_name' => 'Amartha',
                'name' => 'Andi Taufan Garuda Putra',
                'title' => 'Founder/ CEO',
                'content' => 'Amartha was born with the belief that everyone has the same opportunity to start and grow a business, including those who are less fortunate or unbankable.',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDAYZSBKEAMSZQHNQ4WNC0M.png',
                'company_image_path' => 'hero-sections/01JHDAYZSCHZ4V4VPVDYVMA2MS.png',
                'is_active' => true
            ],
            [
                'company_name' => 'Privy',
                'name' => 'Marshall Pribadi',
                'title' => 'Founder/ CEO',
                'content' => 'PrivyID is a digital signature provider founded in 2016. In less than a year, Privyid quickly turned into a major player in the industry by owning the largest company in the telco industry.',
                'published_date' => Carbon::now(),
                'image_path' => '',
                'company_image_path' => '',
                'is_active' => true
            ],
        ];

        foreach ($profiles as $profile) {
            HomeProfileCompany::create($profile);
        }
    }
}
