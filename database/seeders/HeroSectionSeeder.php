<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use App\Models\HeroSectionCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeroSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        HeroSectionCategory::query()->delete();
        HeroSection::query()->delete();

        // Create categories
        $categories = [
            ['name' => 'Home', 'slug' => 'home'],
            ['name' => 'Our Identity', 'slug' => 'our-identity'],
            ['name' => 'Portfolio', 'slug' => 'portfolio'],
            ['name' => 'Platform', 'slug' => 'platform'],
            ['name' => 'Media', 'slug' => 'media'],
            ['name' => 'Publication', 'slug' => 'publication'],
            ['name' => 'Contact Us', 'slug' => 'contact-us']
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
                'title' => 'Our Identity',
                'slug' => 'our-identity',
                'hero_section_category_id' => 2, // About
                'content' => 'Our Identity Section Header',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD1.mp4'
            ],
            [
                'title' => 'Portfolio',
                'slug' => 'portfolio',
                'hero_section_category_id' => 3, // Portfolio
                'content' => 'Portfolio Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD2.mp4'
            ],
            [
                'title' => 'Platform',
                'slug' => 'platform',
                'hero_section_category_id' => 4, // Platform
                'content' => 'Platform Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD3.mp4'
            ],
            [
                'title' => 'Media',
                'slug' => 'media',
                'hero_section_category_id' => 5, // Media
                'content' => 'Media Section Header.',
                'published_date' => now(),
                'image_path' => 'hero-sections/01JEMN5NATHM7E9ZMBZAKEG2QD4.mp4'
            ],
            [
                'title' => 'Publication',
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
    }
}
