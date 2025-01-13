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

        $platforms = [
            [
                'title' => 'Mortgage',
                'slug' => 'mortgage',
                'content' => 'Property tech startups that open to synergy in loan channeling',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG09MC0RMJWX8T99EJRJE8Y.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Financial Management',
                'slug' => 'financial-management',
                'content' => 'Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0ASS6003ZDQ0XDSSWWF85.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Productive Loan',
                'slug' => 'productive-loan',
                'content' => 'Open synergy for loan channeling and referral in productive area',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0BPCRAZDA6HK01NVNNVMN.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Consumptive Loan',
                'slug' => 'consumptive-loan',
                'content' => 'Open synergy for loan channeling and referral in consumptive area',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0C9SFV9AK5QK9PW6XSXXH.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Paylater',
                'slug' => 'paylater',
                'content' => 'Mandiri paylater is looking for partners to maximize your payment options',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0CYN7PHJSS7HS9DW7WJG7.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Savings',
                'slug' => 'savings',
                'content' => 'Eager to collaborate in product bundling or cross selling, targeting B2C and B2B business',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0DK0Z97EKY0EMYM37HG6H.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Invoice Financing',
                'slug' => 'invoice-financing',
                'content' => 'Mandiri tap into partner\'s business model which require invoice financing',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0EA2HBXBY761D1JRTG1VR.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Remittance',
                'slug' => 'remittance',
                'content' => 'Exploring collaboration with startups that provide seamless outgoing and incoming transfers overseas',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0F3K88E8ETRXSNN3SMATQ.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Automotive Financing',
                'slug' => 'automotive-financing',
                'content' => 'Mandiri\'s vehicle financing is looking for startups that focus on primary and secondary market',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0FQQ2BWPS6KS84BTJ692P.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Management',
                'slug' => 'data-management',
                'content' => 'Cover data collection, input and output for business decision-making process',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0G8DTQ8PQFPAMH03HRARJ.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
                'content' => 'AI tech in customer engagement, such as chatbot, CRM and complaint management',
                'published_date' => now(),
                'image_path' => 'platforms/01JHG0H3RW95AKN8CZSCQGDB3H.png',
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
