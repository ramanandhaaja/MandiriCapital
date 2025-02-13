<?php

namespace Database\Seeders;

use App\Models\HeroMaster;
use App\Models\HeroSection;
use App\Models\HeroSectionCategory;
use App\Models\HeroSectionSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        HeroSectionCategory::query()->delete();
        HeroSection::query()->delete();
        HeroSectionSubCategory::query()->delete();



        // Create categories
        $heromasters = [
            [
            'footer' => [
                'en' => "WE'D LOVE TO HEAR FROM YOU",
                'id' => "KAMI SENANG MENDENGAR DARI ANDA"
            ],
            'instagram' => 'https://www.instagram.com/mandiricapital/',
            'linkedin' => 'https://www.linkedin.com/company/mandiri-capital-indonesia-mci/posts/?feedView=all',
            'twitter' => '',
            'email_form' => 'info@mandiri-capital.co.id',
            'email_contact' => 'info@mandiri-capital.co.id',
            'email_customer_report' => 'mcicare@mandiri-capital.co.id',
            'phone' => ' +62-21-5266661',
            'address' => 'Menara Mandiri II, lantai 14, Jl. Jend. Sudirman No. 54-55, Jakarta 12190',
            ],
        ];

        foreach ($heromasters as $data) {
            HeroMaster::create($data);
        }


        // Create categories
        $categories = [
            [
                'name' => [
                    'en' => 'HOME',
                    'id' => 'BERANDA'
                ],
                'slug' => 'home',
                'route' => 'home'
            ],
            [
                'name' => [
                    'en' => 'OUR IDENTITY',
                    'id' => 'IDENTITAS KAMI'
                ],
                'slug' => 'our-identity',
                'route' => 'about'
            ],
            [
                'name' => [
                    'en' => 'INVESTMENT',
                    'id' => 'INVESTASI'
                ],
                'slug' => 'portfolio',
                'route' => 'portfolio'
            ],
            [
                'name' => [
                    'en' => 'VALUE CREATION',
                    'id' => 'PENCIPTAAN NILAI'
                ],
                'slug' => 'platform',
                'route' => 'platform'
            ],
            [
                'name' => [
                    'en' => 'MEDIA',
                    'id' => 'MEDIA'
                ],
                'slug' => 'media',
                'route' => 'media'
            ],
            [
                'name' => [
                    'en' => 'PUBLICATION',
                    'id' => 'PUBLIKASI'
                ],
                'slug' => 'publication',
                'route' => 'report'
            ],
            [
                'name' => [
                    'en' => 'CONTACT US',
                    'id' => 'HUBUNGI KAMI'
                ],
                'slug' => 'contact-us',
                'route' => 'contact'
            ]
        ];

        foreach ($categories as $category) {
            HeroSectionCategory::create($category);
        }

        // Create hero sections
        $sections = [
            [
                'title' => [
                    'en' => 'Corporate Venture Capital of Bank Mandiri',
                    'id' => 'Modal Ventura Korporasi Bank Mandiri'
                ],
                'slug' => 'corporate-venture-capital-of-bank-mandiri',
                'hero_section_category_id' => 1, // Home
                'content' => [
                    'en' => 'We bring unparalleled resources, expertise, and connections to help you grow and thrive in every stage.',
                    'id' => 'Kami membawa sumber daya, keahlian, dan koneksi yang tak tertandingi untuk membantu Anda berkembang dan sukses di setiap tahap.'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD.mp4'
            ],
            [
                'title' => [
                    'en' => 'OUR IDENTITY',
                    'id' => 'IDENTITAS KAMI'
                ],
                'slug' => 'our-identity',
                'hero_section_category_id' => 2, // About
                'content' => [
                    'en' => 'Our Identity Section Header',
                    'id' => 'Header Identitas Kami'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD1.mp4'
            ],
            [
                'title' => [
                    'en' => 'INVESTMENT',
                    'id' => 'INVESTASI'
                ],
                'slug' => 'investment',
                'hero_section_category_id' => 3, // Portfolio
                'content' => [
                    'en' => 'Portfolio Section Header.',
                    'id' => 'Header Portofolio.'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD2.mp4'
            ],
            [
                'title' => [
                    'en' => 'VALUE CREATION',
                    'id' => 'PENCIPTAAN NILAI'
                ],
                'slug' => 'value-creation',
                'hero_section_category_id' => 4, // Platform
                'content' => [
                    'en' => 'Platform Section Header.',
                    'id' => 'Header Platform.'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD3.mp4'
            ],
            [
                'title' => [
                    'en' => 'MEDIA',
                    'id' => 'MEDIA'
                ],
                'slug' => 'media',
                'hero_section_category_id' => 5, // Media
                'content' => [
                    'en' => 'Media Section Header.',
                    'id' => 'Header Media.'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD4.mp4'
            ],
            [
                'title' => [
                    'en' => 'PUBLICATION',
                    'id' => 'PUBLIKASI'
                ],
                'slug' => 'publication',
                'hero_section_category_id' => 6, // Publication
                'content' => [
                    'en' => 'Publication Section Header.',
                    'id' => 'Header Publikasi.'
                ],
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD5.mp4'
            ]
        ];

        foreach ($sections as $section) {
            HeroSection::create($section);
        }



        // Create subcategories sections
        $subcategories = [

            [
                'name' => [
                    'en' => 'About MCI',
                    'id' => 'Tentang MCI'
                ],
                'slug' => 'about-mci',
                'hero_section_category_id' => 2, // About
                'headline_text' => [
                    'en' => 'MCI Connect Startups With Mandiri Group to Drive Rapid Innovation',
                    'id' => 'MCI Menghubungkan Startup dengan Grup Mandiri untuk Mendorong Inovasi Cepat'
                ],
            ],
            [
                'name' => [
                    'en' => 'About Mandiri',
                    'id' => 'Tentang Mandiri'
                ],
                'slug' => 'about-mandiri',
                'hero_section_category_id' => 2, // About
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Our Team',
                    'id' => 'Tim Kami'
                ],
                'slug' => 'our-team',
                'hero_section_category_id' => 2, // About
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Get Investment',
                    'id' => 'Dapatkan Investasi'
                ],
                'slug' => 'get-investment',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => [
                    'en' => 'Ready to rise? Prove your resilience and show you have what it takes!',
                    'id' => 'Siap untuk meningkat? Tunjukkan ketahanan Anda dan buktikan Anda memiliki apa yang diperlukan!'
                ],
            ],
            [
                'name' => [
                    'en' => 'Portfolio',
                    'id' => 'Portofolio'
                ],
                'slug' => 'portfolio',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Funds',
                    'id' => 'Dana'
                ],
                'slug' => 'funding',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => [
                    'en' => 'To foster long-term growth, we invest through three distinct fund vehicles',
                    'id' => 'Untuk mendorong pertumbuhan jangka panjang, kami berinvestasi melalui tiga kendaraan dana yang berbeda'
                ],
            ],
            [
                'name' => [
                    'en' => 'Our Focus',
                    'id' => 'Fokus Kami'
                ],
                'slug' => 'business',
                'hero_section_category_id' => 4, // Program
                'headline_text' => [
                    'en' => 'Catalysing Growth Through Synergy with Our Value Creation Programs',
                    'id' => 'Mendorong Pertumbuhan Melalui Sinergi dengan Program Penciptaan Nilai Kami'
                ],
            ],
            [
                'name' => [
                    'en' => 'Program',
                    'id' => 'Program'
                ],
                'slug' => 'program',
                'hero_section_category_id' => 4, // Program
                'headline_text' => [
                    'en' => 'Our Value Creation Program',
                    'id' => 'Program Penciptaan Nilai Kami'
                ],
            ],
            [
                'name' => [
                    'en' => 'All',
                    'id' => 'Semua'
                ],
                'slug' => 'all',
                'hero_section_category_id' => 5, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'News',
                    'id' => 'Berita'
                ],
                'slug' => 'news',
                'hero_section_category_id' => 5, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Podcast',
                    'id' => 'Podcast'
                ],
                'slug' => 'podcast',
                'hero_section_category_id' => 5, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Blog',
                    'id' => 'Blog'
                ],
                'slug' => 'blog',
                'hero_section_category_id' => 5, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'All',
                    'id' => 'Semua'
                ],
                'slug' => 'all-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Annual & Financial Report',
                    'id' => 'Laporan Tahunan & Keuangan'
                ],
                'slug' => 'annual-and-financial-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Sustainability Report',
                    'id' => 'Laporan Keberlanjutan'
                ],
                'slug' => 'sustainability-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],
            ],
            [
                'name' => [
                    'en' => 'Whitepaper',
                    'id' => 'Whitepaper'
                ],
                'slug' => 'whitepaper',
                'hero_section_category_id' => 6, // Program
                'headline_text' => [
                    'en' => '',
                    'id' => ''
                ],

            ],

        ];

        foreach ($subcategories as $subcategory) {
            HeroSectionSubCategory::create($subcategory);
        }

    }
}
