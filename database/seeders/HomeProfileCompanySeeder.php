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
                'content' => 'Securing funding from MCI was a game-changer for our business. Their support and expertise helped us scale faster than we imagined. We\'re now reaching markets we once thought were out of reach.',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDAYZSBKEAMSZQHNQ4WNC0M.png',
                'company_image_path' => 'hero-sections/01JHDAYZSCHZ4V4VPVDYVMA2MS.png',
                'is_active' => true
            ],
            [
                'company_name' => 'GoTo',
                'name' => 'Andre Soelistyo',
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
                'company_name' => 'Halofina',
                'name' => 'Adjie Wicaksana',
                'title' => 'Founder & CEO',
                'content' => 'Thanks to the funding from MCI, we’ve been able to expand our operations, build a world-class team, and bring our product to thousands of new customers.',
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDB1Y8YFDE9WC862F63STZ2.png',
                'company_image_path' => 'hero-sections/01JHDB1Y8ZPYCB7X7Q7N3G41ZE.png',
                'is_active' => true
            ]
        ];

        foreach ($profiles as $profile) {
            HomeProfileCompany::create($profile);
        }
    }
}
