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
                'title' => [
                    'en' => 'Unlock Your Potentials',
                    'id' => 'Buka Potensi Anda'
                ],
                'subtitle' => [
                    'en' => '',
                    'id' => ''
                ],
                'content' => [
                    'en' => '<h2>Ecosystem Driven</h2><p>We empower innovation and foster collaboration by leveraging our strategic position within the Mandiri Group and its extensive network.</p><p>Beyond Mandiri Group, we also help startups to connect with SOEs and other corporations.</p><h2>Tailored Guidance</h2><p>Through our value creation programs, we offer hands-on support to scale your business and operations excellence.</p><h2>Access to Indonesia and Global Market:</h2><p>At the forefront of innovation, MCI supports startups worldwide in their expansion efforts.</p>',
                    'id' => '<h2>Berbasis Ekosistem</h2><p>Kami memberdayakan inovasi dan mendorong kolaborasi dengan memanfaatkan posisi strategis kami dalam Grup Mandiri dan jaringannya yang luas.</p><p>Di luar Grup Mandiri, kami juga membantu startup untuk terhubung dengan BUMN dan korporasi lainnya.</p><h2>Panduan yang Disesuaikan</h2><p>Melalui program penciptaan nilai kami, kami menawarkan dukungan langsung untuk mengembangkan bisnis dan keunggulan operasional Anda.</p><h2>Akses ke Pasar Indonesia dan Global:</h2><p>Di garis depan inovasi, MCI mendukung startup di seluruh dunia dalam upaya ekspansi mereka.</p>'
                ],
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
                'title' => [
                    'en' => 'PROJECTS',
                    'id' => 'PROYEK'
                ],
                'subtitle' => [
                    'en' => 'hand to business unit',
                    'id' => 'diserahkan ke unit bisnis'
                ],
                'content' => [
                    'en' => '120+',
                    'id' => '120+'
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'STARTUPS',
                    'id' => 'STARTUP'
                ],
                'subtitle' => [
                    'en' => 'work with our business unit',
                    'id' => 'bekerja sama dengan unit bisnis kami'
                ],
                'content' => [
                    'en' => '40+',
                    'id' => '40+'
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'BUSINESS UNITS',
                    'id' => 'UNIT BISNIS'
                ],
                'subtitle' => [
                    'en' => 'mandiri and subsidiaries work with statup',
                    'id' => 'mandiri dan anak perusahaan bekerja dengan startup'
                ],
                'content' => [
                    'en' => '40+',
                    'id' => '40+'
                ],
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
                'name' => [
                    'en' => 'Embedded Finance',
                    'id' => 'Keuangan Tertanam'
                ],
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => [
                    'en' => 'Health & Wellness',
                    'id' => 'Kesehatan & Kebugaran'
                ],
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => [
                    'en' => 'Wealth Management',
                    'id' => 'Manajemen Kekayaan'
                ],
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => [
                    'en' => 'Tech Enabler',
                    'id' => 'Pemungkin Teknologi'
                ],
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => [
                    'en' => 'Value Chain Enabler',
                    'id' => 'Pemungkin Rantai Nilai'
                ],
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => [
                    'en' => 'Property Tech & Asset Management',
                    'id' => 'Teknologi Properti & Manajemen Aset'
                ],
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
                'title' => [
                    'en' => 'Generative AI',
                    'id' => 'AI Generatif'
                ],
                'slug' => 'generative-ai',
                'platform_category_id' => 1,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ8918FN548BZ18A0V24KC.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Financial Management',
                    'id' => 'Manajemen Keuangan'
                ],
                'slug' => 'financial-management',
                'platform_category_id' => 1,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ8Q3CGCK4R9KQ871NM51T.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Data Management',
                    'id' => 'Manajemen Data'
                ],
                'slug' => 'data-management',
                'platform_category_id' => 1,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ92Y23M9N4K0MRVM51T51.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Personalisation',
                    'id' => 'Personalisasi'
                ],
                'slug' => 'personalisation',
                'platform_category_id' => 1,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ9HGD9592C6K4SG5PBKGJ.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Health & Wellness',
                    'id' => 'Kesehatan & Kebugaran'
                ],
                'slug' => 'health-wellness',
                'platform_category_id' => 2,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZ9VQNXA9BBERMSYMDYRDK.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Wealth Management',
                    'id' => 'Manajemen Kekayaan'
                ],
                'slug' => 'wealth-management',
                'platform_category_id' => 3,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZA8WSS923773HBZMSFNV0.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'SaaS',
                    'id' => 'SaaS'
                ],
                'slug' => 'saas',
                'platform_category_id' => 4,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZANRN575J22EHT2TCNXDS.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Online Payment',
                    'id' => 'Pembayaran Online'
                ],
                'slug' => 'online-payment',
                'platform_category_id' => 4,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZB1G4JJGJ19AP0V99AS2M.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Cash Collection',
                    'id' => 'Pengumpulan Uang'
                ],
                'slug' => 'cash-collections',
                'platform_category_id' => 4,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZBF8T5FAGB7ZVXFFJXMG6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Lifestyle',
                    'id' => 'Gaya Hidup'
                ],
                'slug' => 'lifestyle',
                'platform_category_id' => 5,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZC3E4ZAKEGMT1Q2ABHND8.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'FMCG',
                    'id' => 'FMCG'
                ],
                'slug' => 'fmcg',
                'platform_category_id' => 5,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZCEHF05FQK65DZXGX7H6Y.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Health',
                    'id' => 'Kesehatan'
                ],
                'slug' => 'health',
                'platform_category_id' => 5,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZCVD9RJM412N15A8TYKGE.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Transportation',
                    'id' => 'Transportasi'
                ],
                'slug' => 'transportation',
                'platform_category_id' => 5,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZVG8S7WA8MW5V9E1N2M3N.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Cash Collection',
                    'id' => 'Pengumpulan Uang'
                ],
                'slug' => 'cash-collection',
                'platform_category_id' => 5,
                'published_date' => now(),
                'image_path' => 'platforms/01JKJ022GZSN3SFRERJDSR2KCP.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Asset Liquidation',
                    'id' => 'Likuidasi Aset'
                ],
                'slug' => 'asset-liquidation',
                'platform_category_id' => 6,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZH9V2AWB6E79EXSX837K2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Product bundling for wealth customers',
                    'id' => 'Penggabungan Produk untuk Pelanggan Kaya'
                ],
                'slug' => 'product-bundling-for-wealth-customers',
                'platform_category_id' => 6,
                'published_date' => now(),
                'image_path' => 'platforms/01JKHZHQPX59N129MDDWH1WZZT.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => [
                    'en' => 'Idle asset management',
                    'id' => 'Manajemen Aset Tidak Aktif'
                ],
                'slug' => 'idle-asset-management',
                'platform_category_id' => 6,
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
