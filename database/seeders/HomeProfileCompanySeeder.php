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
                'title' => [
                    'en' => 'Founder/ CEO',
                    'id' => 'Pendiri/ CEO'
                ],
                'content' => [
                    'en' => 'Amartha was born with the belief that everyone has the same opportunity to start and grow a business, including those who are less fortunate or unbankable.',
                    'id' => 'Amartha lahir dengan keyakinan bahwa setiap orang memiliki kesempatan yang sama untuk memulai dan mengembangkan bisnis, termasuk mereka yang kurang beruntung atau unbankable.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JHDAYZSBKEAMSZQHNQ4WNC0M.png',
                'company_image_path' => 'hero-sections/01JHDAYZSCHZ4V4VPVDYVMA2MS.png',
                'is_active' => true
            ],
            [
                'company_name' => 'Privy',
                'name' => 'Marshall Pribadi',
                'title' => [
                    'en' => 'Founder/ CEO',
                    'id' => 'Pendiri/ CEO'
                ],
                'content' => [
                    'en' => 'PrivyID is a digital signature provider founded in 2016. In less than a year, Privyid quickly turned into a major player in the industry by owning the largest company in the telco industry.',
                    'id' => 'PrivyID adalah penyedia tanda tangan digital yang didirikan pada tahun 2016. Dalam waktu kurang dari setahun, Privyid dengan cepat menjadi pemain utama di industri ini dengan memiliki perusahaan terbesar di industri telekomunikasi.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'hero-sections/01JK1PF6NVSW2389XYA60PQDVT.png',
                'company_image_path' => 'hero-sections/01JK1PF6NSJ04PD4AHZRCQX49K.png',
                'is_active' => true
            ],
        ];

        foreach ($profiles as $profile) {
            HomeProfileCompany::create($profile);
        }
    }
}
