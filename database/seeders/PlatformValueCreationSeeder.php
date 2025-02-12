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
                'content_frontpage' => [
                    'en' => "Connecting Startups Discover What's Possible",
                    'id' => "Menghubungkan Startup Menemukan Berbagai Kemungkinan"
                ],
                'content_sub_frontpage' => [
                    'en' => 'Business Matchmaking between startups and Mandiri Group, speed dating with investment team, and sharing session',
                    'id' => 'Pencocokan bisnis antara startup dan Grup Mandiri, speed dating dengan tim investasi, dan sesi berbagi'
                ],
                'logo' => 'platforms/01JHG8DQPQSJ55ETWR63FPN3RC.png',
                'image_path_frontpage1' => 'platforms/01JKMXV95BQY33Z8TZ0KJY5MEX.jpg',
                'image_path_frontpage2' => 'platforms/01JKMXV95D9AXJJBHKMPK58H50.jpg',
                'image_path_frontpage3' => 'platforms/01JKMXV95EGZCGC0Z5NWYZ91KQ.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Yaxis',
                'slug' => 'yaxis',
                'content_frontpage' => [
                    'en' => "Network & Industry Enrichment",
                    'id' => "Jaringan & Pengayaan Industri"
                ],
                'content_sub_frontpage' => [
                    'en' => 'Networking event designed to bring startup founders, corporations, regulators, government, and tech communities together to meet, connect, and build relationships and explore potential collaborations',
                    'id' => 'Acara jaringan yang dirancang untuk membawa pendiri startup, perusahaan, regulator, pemerintah, dan komunitas teknologi bersama-sama untuk bertemu, terhubung, membangun hubungan dan menjelajahi potensi kolaborasi'
                ],
                'logo' => 'platforms/01JHG8K3DJ8QG7P82PY1V9F7RH.png',
                'image_path_frontpage1' => 'platforms/01JKMY629R066ATP4XW4XKDK10.jpg',
                'image_path_frontpage2' => 'platforms/01JKMY629TJBYR4F5X78W2GYTN.jpg',
                'image_path_frontpage3' => 'platforms/01JKMY629VBH7PEB32BBZ9FTJS.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Zenith',
                'slug' => 'zenith',
                'content_frontpage' => [
                    'en' => "Zenith Startup Accelerator",
                    'id' => "Pengembangan Startup Zenith"
                ],
                'content_sub_frontpage' => [
                    'en' => 'Accelerator program to accelerate integration between startup and Mandiri Group. The program includes 3 different sessions which include mentoring, focus group discussion, and synergy creation.',
                    'id' => 'Program akselerator untuk mempercepat integrasi antara startup dan Grup Mandiri. Program ini mencakup 3 sesi yang berbeda yang mencakup mentoring, diskusi kelompok fokus, dan penciptaan sinergi.'
                ],
                'logo' => 'platforms/01JHG8KFCAQJ4ASQ3406YMP8AB.png',
                'image_path_frontpage1' => 'platforms/01JKMY86HD6EDPB6TQWKWZD3EB.png',
                'image_path_frontpage2' => '',
                'image_path_frontpage3' => '',
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
