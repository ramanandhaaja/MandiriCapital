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
                'company_name' => 'GoTo',
                'name' => 'Patrick Waluyo',
                'title' => 'CEO',
                'content' => 'Partnering with MCI gave us the financial backing and strategic guidance we needed to bring our vision to life. Their belief in our mission fueled our growth every step of the way.',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDB0M1HRE1AATMY581D73YW.png',
                'company_image_path' => 'hero-sections/01JHDB0M1K01TKM4QTA42QR7Q1.png',
                'is_active' => true
            ],
            [
                'company_name' => 'Delos',
                'name' => 'Guntur Mallarangeng',
                'title' => 'Founder/ CEO',
                'content' => 'The investment from MCI didn’t just provide funding; it also opened doors to valuable networks and insights that have been critical for our success.',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDB19YPTDVK8420JKMCE5V1.png',
                'company_image_path' => 'hero-sections/01JHDB19YRFSN8Q0RNEBMEZSX6.png',
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
