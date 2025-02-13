<?php

namespace Database\Seeders;

use App\Models\PlatformValueCreationXponent;
use App\Models\PlatformValueCreationYaxis;
use App\Models\PlatformValueCreationZenith;
use App\Models\PortfolioFundingArticleSub;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformValueCreationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Sub-articles for first article
        $xponenent = [
            [
                'hero_text' => [
                    'en' => "Business Matchmaking between startups and Mandiri Group",
                    'id' => "Pertemuan Usaha antara startup dan Mandiri Group"
                ],
                'hero_image' => '',
                'hero_background' => '',
                'headline'=> [
                    'en' => "",
                    'id' => ""
                ],
                'counter1_title'=> [
                    'en' => "Startups",
                    'id' => "Startup"
                ],
                'counter2_title'=> [
                    'en' => "Mandiri Business Units",
                    'id' => "Unit Bisnis Mandiri"
                ],
                'counter3_title'=> [
                    'en' => "Business Deals",
                    'id' => "Usaha Bisnis"
                ],
                'counter1_value' => [
                    'en' => "65+",
                    'id' => "65+"
                ],
                'counter2_value' => [
                    'en' => "20+",
                    'id' => "20+"
                ],
                'counter3_value' => [
                    'en' => "10+",
                    'id' => "10+"
                ],
                'whyexponent_title'=> [
                    'en' => "Why You Should Join Xponent?",
                    'id' => "Mengapa Anda Harus Bergabung dengan Xponent?"
                ],
                'whyexponent_subtitle'=> [
                    'en' => "Practical 3-Month Program of Venture Development and Synergy Creation",
                    'id' => "Program Praktis 3 Bulan Pengembangan Usaha dan Kreatifitas Sumber Daya"
                ],
                'insideexponent_title'=> [
                    'en' => "Inside Xponent",
                    'id' => "Dalam Xponent"
                ],
                'insideexponent_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'image_path1'=> '',
                'image_path2'=> '',
                'image_path3'=> '',
                'image_path4'=> '',
                'image_path5'=> '',
                'testimonialexponent_title'=> [
                    'en' => "About The Program",
                    'id' => "Tentang Program"
                ],
                'testimonialexponent_subtitle'=> [
                    'en' => "Testimonies",
                    'id' => "Testimoni"
                ],
                'footer_text'=> [
                    'en' => "Discover What's Possible",
                    'id' => "Temukan Apa Yang Mungkin"
                ],
            ],
        ];

        foreach ($xponenent as $article) {
            PlatformValueCreationXponent::updateOrCreate(
                $article
            );
        }


        $yaxis = [
            [
                'hero_text' => [
                    'en' => "Networking and Collaboration Platform",
                    'id' => "Platform Networking dan Kolaborasi"
                ],
                'hero_image' => '',
                'headline'=> [
                    'en' => "Networking and collaboration platform designed to connect startups, corporations, regulator, and tech communities. Y-axis is a catalyst for building a stronger, more collaborative ecosystem",
                    'id' => "Platform Networking dan Kolaborasi yang dirancang untuk menghubungkan startup, perusahaan, regulator, dan komunitas teknologi. Y-axis adalah katalis untuk membangun ekosistem yang lebih kuat dan lebih kolaboratif"
                ],
                'footer_text'=> [
                    'en' => "Connecting the Dots",
                    'id' => "Menghubungkan Titik"
                ],
                'image_path1'=> '',
                'image_path2'=> '',
                'image_path3'=> '',

            ],
        ];

        foreach ($yaxis as $article) {
            PlatformValueCreationYaxis::updateOrCreate(
                $article
            );
        }



        $zenith = [
            [
                'hero_text' => [
                    'en' => "Zenith Startup <br/>Accelerator",
                    'id' => "Zenith Startup <br/>Accelerator"
                ],
                'hero_image' => '',
                'hero_background' => '',
                'headline'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_title'=> [
                    'en' => "Why You Should Join Zenith?",
                    'id' => "Mengapa Anda Harus Bergabung dengan Zenith?"
                ],
                'whyzenith_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'insidezenith_title'=> [
                    'en' => "Inside Zenith",
                    'id' => "Dalam Zenith"
                ],
                'insidezenith_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'deal_title'=> [
                    'en' => "10+ Business Deals",
                    'id' => "10+ Usaha Bisnis"
                ],
                'deal_image_path1'=> '',
                'deal_image_path2'=> '',
                'deal_image_path3'=> '',
                'deal_image_path4'=> '',
                'deal_image_path5'=> '',
                'deal_image_path6'=> '',
                'image_path1'=> '',
                'image_path2'=> '',
                'image_path3'=> '',
                'image_path4'=> '',
                'image_path5'=> '',
                'testimonialzenith_title'=> [
                    'en' => "About The Program",
                    'id' => "Tentang Program"
                ],
                'testimonialzenith_subtitle'=> [
                    'en' => "Testimonies",
                    'id' => "Testimoni"
                ],
                'footer_text'=> [
                    'en' => "Ignite The Highest Point",
                    'id' => "Hidupkan Puncak Yang Tertinggi"
                ],
            ],
        ];

        foreach ($zenith as $article) {
            PlatformValueCreationZenith::updateOrCreate(
                $article
            );
        }


    }
}
