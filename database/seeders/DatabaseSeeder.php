<?php

namespace Database\Seeders;

use App\Models\Publication;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'nandha',
            'email' => 'nandha@nandha.com',
            'password' => Hash::make('nandha'),
        ]);

        $this->call([
            PortfolioSeeder::class,
            MediaSeeder::class,
            PublicationSeeder::class,
        ]);
    }
}
