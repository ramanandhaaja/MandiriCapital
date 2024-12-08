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
                'title' => 'Welcome to Our Company',
                'slug' => 'welcome-to-our-company',
                'hero_section_category_id' => 1, // Home
                'content' => 'Leading the way in financial innovation and technology solutions.',
                'published_date' => now(),
                'image_path' => 'hero-sections/welcome.jpg'
            ],
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'hero_section_category_id' => 2, // About
                'content' => 'Learn about our mission, vision, and values.',
                'published_date' => now(),
                'image_path' => 'hero-sections/about.jpg'
            ],
            [
                'title' => 'Our Services',
                'slug' => 'our-services',
                'hero_section_category_id' => 3, // Services
                'content' => 'Discover our comprehensive range of financial services.',
                'published_date' => now(),
                'image_path' => 'hero-sections/services.jpg'
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'hero_section_category_id' => 4, // Contact
                'content' => 'Get in touch with our team of experts.',
                'published_date' => now(),
                'image_path' => 'hero-sections/contact.jpg'
            ]
        ];

        foreach ($sections as $section) {
            HeroSection::create($section);
        }
    }
}
