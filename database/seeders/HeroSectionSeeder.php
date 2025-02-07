<?php

namespace Database\Seeders;

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
        $categories = [
            ['name' => 'HOME', 'slug' => 'home'],
            ['name' => 'OUR IDENTITY', 'slug' => 'our-identity'],
            ['name' => 'INVESTMENT', 'slug' => 'portfolio'],
            ['name' => 'VALUE CREATION', 'slug' => 'platform'],
            ['name' => 'MEDIA', 'slug' => 'media'],
            ['name' => 'PUBLICATION', 'slug' => 'publication'],
            ['name' => 'CONTACT US', 'slug' => 'contact-us']
        ];

        foreach ($categories as $category) {
            HeroSectionCategory::create($category);
        }

        // Create hero sections
        $sections = [
            [
                'title' => 'Corporate Venture Capital of Bank Mandiri',
                'slug' => 'corporate-venture-capital-of-bank-mandiri',
                'hero_section_category_id' => 1, // Home
                'content' => 'We bring unparalleled resources, expertise, and connections to help you grow and thrive in every stage.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD.mp4'
            ],
            [
                'title' => 'OUR IDENTITY',
                'slug' => 'our-identity',
                'hero_section_category_id' => 2, // About
                'content' => 'Our Identity Section Header',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD1.mp4'
            ],
            [
                'title' => 'INVESTMENT',
                'slug' => 'investment',
                'hero_section_category_id' => 3, // Portfolio
                'content' => 'Portfolio Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD2.mp4'
            ],
            [
                'title' => 'VALUE CREATION',
                'slug' => 'value-creation',
                'hero_section_category_id' => 4, // Platform
                'content' => 'Platform Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD3.mp4'
            ],
            [
                'title' => 'MEDIA',
                'slug' => 'media',
                'hero_section_category_id' => 5, // Media
                'content' => 'Media Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD4.mp4'
            ],
            [
                'title' => 'PUBLICATION',
                'slug' => 'publication',
                'hero_section_category_id' => 6, // Publication
                'content' => 'Publication Section Header.',
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
                'name' => 'About MCI',
                'slug' => 'about-mci',
                'hero_section_category_id' => 2, // About
                'headline_text' => 'MCI Connect Startups With Mandiri Group to Drive Rapid Innovation',
            ],
            [
                'name' => 'About Mandiri',
                'slug' => 'about-mandiri',
                'hero_section_category_id' => 2, // About
                'headline_text' => '',
            ],
            [
                'name' => 'Our Team',
                'slug' => 'our-team',
                'hero_section_category_id' => 2, // About
                'headline_text' => '',
            ],
            [
                'name' => 'Get Investment',
                'slug' => 'get-investment',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => 'Ready to rise? Prove your resilience and show you have what it takes!',
            ],
            [
                'name' => 'Portfolio',
                'slug' => 'portfolio',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => '',
            ],
            [
                'name' => 'Funds',
                'slug' => 'funding',
                'hero_section_category_id' => 3, // Investment
                'headline_text' => 'To foster long-term growth, we invest through three distinct fund vehicles',
            ],
            [
                'name' => 'Our Focus',
                'slug' => 'business',
                'hero_section_category_id' => 4, // Program
                'headline_text' => 'Catalysing Growth Through Synergy with Our Value Creation Programs',
            ],
            [
                'name' => 'Program',
                'slug' => 'program',
                'hero_section_category_id' => 4, // Program
                'headline_text' => 'Our Value Creation Program',
            ],
            [
                'name' => 'All',
                'slug' => 'all',
                'hero_section_category_id' => 5, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'hero_section_category_id' => 5, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'Blog',
                'slug' => 'blog',
                'hero_section_category_id' => 5, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'All',
                'slug' => 'all-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'Annual & Financial Report',
                'slug' => 'annual-and-financial-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'Sustainability Report',
                'slug' => 'sustainability-report',
                'hero_section_category_id' => 6, // Program
                'headline_text' => '',
            ],
            [
                'name' => 'Whitepaper',
                'slug' => 'whitepaper',
                'hero_section_category_id' => 6, // Program
                'headline_text' => '',
            ],

        ];

        foreach ($subcategories as $subcategory) {
            HeroSectionSubCategory::create($subcategory);
        }

    }
}
