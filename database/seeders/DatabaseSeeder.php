<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Publication;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            PortfolioSeeder::class,
            MediaSeeder::class,
            PublicationSeeder::class,
            PlatformSeeder::class,
            HomeArticleSeeder::class,
            HeroSectionSeeder::class,
            PublicationEmailSeeder::class,
            HomeProfileCompanySeeder::class,
        ]);
    }
}
