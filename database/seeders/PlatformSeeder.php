<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Platform;
use App\Models\PlatformArticle;
use App\Models\PlatformCategory;
use App\Models\PlatformCounter;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $platformArticles = [
            [
                'title' => 'Unlock Your Potentials',
                'subtitle' => '',
                'content' => 'Ecosystem Driven

We empower innovation and foster collaboration by leveraging our strategic position within the Mandiri Group and its extensive network.

Beyond Mandiri Group, we also help startups to connect with SOEs and other corporations.

Tailored Guidance

Through our value creation programs, we offer hands-on support to scale your business and operations excellence.

Access to Indonesia and Global Market:

At the forefront of innovation, MCI supports startups worldwide in their expansion efforts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($platformArticles as $article) {
            PlatformArticle::updateOrCreate(
                $article
            );
        }

        $platformCounters = [
            [
                'title' => 'PROJECTS',
                'subtitle' => 'hand to business unit',
                'content' => '120+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'STARTUPS',
                'subtitle' => 'work with our business unit',
                'content' => '40+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'BUSINESS UNITS',
                'subtitle' => 'mandiri and subsidiaries work with statup',
                'content' => '40+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($platformCounters as $counter) {
            PlatformCounter::updateOrCreate(
                $counter
            );
        }

        $platformCategories = [
            [
                'name' => 'Embedded Finance',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health & Wellness',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wealth Management',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tech Enabler',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Value Chain Enabler',
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Property Tech & Asset Management',
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($platformCategories as $platformCategory) {
            PlatformCategory::updateOrCreate(
                $platformCategory
            );
        }

        $platforms = [
            [
                'title' => 'Generative AI',
                'slug' => 'generative-ai',
                'platform_category_id' => 1,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ8918FN548BZ18A0V24KC.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Financial Management',
                'slug' => 'financial-management',
                'platform_category_id' => 1,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ8Q3CGCK4R9KQ871NM51T.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Management',
                'slug' => 'data-management',
                'platform_category_id' => 1,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ92Y23M9N4K0MRVM51T51.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Personalisation',
                'slug' => 'personalisation',
                'platform_category_id' => 1,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ9HGD9592C6K4SG5PBKGJ.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health & Wellness',
                'slug' => 'health-wellness',
                'platform_category_id' => 2,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ9VQNXA9BBERMSYMDYRDK.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wealth Management',
                'slug' => 'wealth-management',
                'platform_category_id' => 3,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZA8WSS923773HBZMSFNV0.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SaaS',
                'slug' => 'saas',
                'platform_category_id' => 4,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZANRN575J22EHT2TCNXDS.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Online Payment',
                'slug' => 'online-payment',
                'platform_category_id' => 4,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZB1G4JJGJ19AP0V99AS2M.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cash Collection',
                'slug' => 'cash-collections',
                'platform_category_id' => 4,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZBF8T5FAGB7ZVXFFJXMG6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lifestyle',
                'slug' => 'lifestyle',
                'platform_category_id' => 5,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZC3E4ZAKEGMT1Q2ABHND8.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FMCG',
                'slug' => 'fmcg',
                'platform_category_id' => 5,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZCEHF05FQK65DZXGX7H6Y.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health',
                'slug' => 'health',
                'platform_category_id' => 5,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZCVD9RJM412N15A8TYKGE.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Transportation',
                'slug' => 'transportation',
                'platform_category_id' => 5,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZVG8S7WA8MW5V9E1N2M3N.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cash Collection',
                'slug' => 'cash-collection',
                'platform_category_id' => 5,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKJ022GZSN3SFRERJDSR2KCP.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Asset Liquidation',
                'slug' => 'asset-liquidation',
                'platform_category_id' => 6,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZH9V2AWB6E79EXSX837K2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Product bundling for wealth customers',
                'slug' => 'product-bundling-for-wealth-customers',
                'platform_category_id' => 6,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZHQPX59N129MDDWH1WZZT.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Idle asset management',
                'slug' => 'idle-asset-management',
                'platform_category_id' => 6,
                'content' => '',
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZJ46KXBYNKA3T67ZCW6XH.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($platforms as $platform) {
            Platform::updateOrCreate(
                ['slug' => $platform['slug']],
                $platform
            );
        }
    }
}
