<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Platform;
use App\Models\PlatformCategory;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First, seed the platform categories
        $categories = [
            [
                'name' => 'Funding',
                'slug' => 'funding',
            ],
            [
                'name' => 'Ecosystem',
                'slug' => 'ecosystem',
            ],
            [
                'name' => 'Synergy Program',
                'slug' => 'synergy-program',
            ],
        ];

        foreach ($categories as $category) {
            PlatformCategory::updateOrCreate(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }

        // Then, seed the platforms
        $platforms = [
            [
                'title' => 'Bank Mandiri (EUROPE) Ltd',
                'slug' => 'bank-mandiri-europe',
                'platform_category_id' => 2,
                'content' => 'Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan The Companies A ct 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London',
                'published_date' => '1999-06-22',
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mandiri International Remittance',
                'slug' => 'mandiri-international-remittance',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'Sebagai anak perusahaan yang sepenuhnya dimiliki oleh PT Bank Mandiri (Persero) Tbk., Mandiri International Remittance Sdn. Bhd. (MIR) telah menyediakan Layanan Pengiriman Uang (Remittance Service Provider) yang memiliki lisensi resmi dari Bank Negara Malaysia sejak tanggal 17 Maret 2009.',
                'published_date' => '2009-03-17',
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'AXA Mandiri Finance Service',
                'slug' => 'axa-mandiri-finance',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'PT AXA Mandiri Financial Services (AXA Mandiri) adalah perusahaan patungan (joint venture) antara PT Bank Mandiri (Persero) Tbk dan AXA yang melakukan kegiatan pemasaran produk asuransi melalui kerjasama dengan Bank (bancassurance)',
                'published_date' => Carbon::now()->subYears(5)->format('Y-m-d'),
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PT. Bank Mandiri Taspen',
                'slug' => 'bank-mandiri-taspen',
                'platform_category_id' => 2, // Bank category
                'content' => 'PT Bank Mandiri Taspen (MANTAP) berkedudukan Kantor Pusat di Jalan Melati No.65 Denpasar - Bali. Bank umum yang dimiliki oleh 2 BUMN yaitu PT Bank Mandiri (Persero) Tbk. dan PT Taspen (Persero) fokus bisnis pada segmen pensiunan dan UMKM',
                'published_date' => Carbon::now()->subYears(2)->format('Y-m-d'),
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mandiri Tunas Finance',
                'slug' => 'mandiri-tunas-finance',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'PT Mandiri Tunas Finance (MTF) merupakan lembaga pembiayaan yang fokus pada pembiayaan Investasi, Modal Kerja, Multiguna dan kegiatan pembiayaan lain. Februari 2009, Bank Mandiri mengakuisisi menjadi PT Mandiri Tunas Finance (MTF)',
                'published_date' => '2009-02-01',
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mandiri Utama Finance',
                'slug' => 'mandiri-utama-finance',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'PT Mandiri Utama Finance (MUF) merupakan lembaga pembiayaan yang fokus pada pembiayaan konsumen khususnya pembiayaan kendaraan bermotor. TAHUN 2015, Bank Mandiri bersama dengan PT Tunas Ridean Tbk dan PT Asco merealisir mendirikan MUF',
                'published_date' => '2015-01-01',
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mandiri Sekuritas',
                'slug' => 'mandiri-sekuritas',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'PT Mandiri Sekuritas merupakan perusahaan efek hasil merger beberapa perusahaan sekuritas di lingkungan Bank Mandiri, yaitu Bumi Daya Sekuritas, Exim Securities dan Merincorp Securities Indonesia.',
                'published_date' => Carbon::now()->subYears(3)->format('Y-m-d'),
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mandiri Asuransi Inhealth',
                'slug' => 'mandiri-inhealth',
                'platform_category_id' => 2, // Financial Services category
                'content' => 'PT Asuransi Jiwa Inhealth Indonesia selanjutnya disebut Mandiri Inhealth didirikan pada tanggal 6 Oktober 2008 yang merupakan anak perusahaan PT Askes (Persero) dan Koperasi Bhakti PT Askes (Persero)',
                'published_date' => '2008-10-06',
                'image_path' => 'images/platform/funding1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bank Syariah Indonesia',
                'slug' => 'bank-syariah-indonesia',
                'platform_category_id' => 2, // Bank category
                'content' => 'Bank Syariah Indonesia adalah wujud sinergi untuk menjadikan keuangan dan ekonomi Syariah sebagai pilar kekuatan baru ekonomi nasional',
                'published_date' => Carbon::now()->subYears(1)->format('Y-m-d'),
                'image_path' => 'images/platform/funding1.png',
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
