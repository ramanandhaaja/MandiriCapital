<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Platform;
use App\Models\PlatformValueCreation;

class PlatformValueCreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $platforms = [
            [

                'title' => 'Xponent',
                'slug' => 'xponent',
                'content_frontpage' => "Connecting Startups Discover What's Possible",
                'content_sub_frontpage' => 'Business Matchmaking between startups and Mandiri Group, speed dating with investment team, and sharing session',
                'logo' => 'platforms/01JHG8DQPQSJ55ETWR63FPN3RC.png',
                'image_path_frontpage' => 'platforms/01JHG9JAK3NWTR0BKDG07MA333.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Yaxis',
                'slug' => 'yaxis',
                'content_frontpage' => "Network & Industry Enrichment",
                'content_sub_frontpage' => 'Networking event designed to bring startup founders, corporations, regulators, government, and tech communities together to meet, connect, and build relationships and explore potential collaborations',
                'logo' => 'platforms/01JHG8K3DJ8QG7P82PY1V9F7RH.png',
                'image_path_frontpage' => 'platforms/01JHG9GXX7SCRAD553M576EZFZ.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Zenith',
                'slug' => 'zenith',
                'content_frontpage' => "Zenith Startup Accelerator",
                'content_sub_frontpage' => 'Accelerator program to accelerate integration between startup and Mandiri Group. The program includes 3 different sessions which include mentoring, focus group discussion, and synergy creation.',
                'logo' => 'platforms/01JHG8KFCAQJ4ASQ3406YMP8AB.png',
                'image_path_frontpage' => 'platforms/01JHG9WN15M5ZXR4GE478YJ4XV.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach ($platforms as $platform) {
            PlatformValueCreation::updateOrCreate(
                ['slug' => $platform['slug']],
                $platform
            );
        }
    }
}
