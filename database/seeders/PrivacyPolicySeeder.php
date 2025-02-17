<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PrivacyPolicySeeder extends Seeder
{
    public function run(): void
    {
        $policies = [
            [
                'description' => [
                    'en' => 'Privacy Policy - Business Partners & Investors',
                    'id' => 'Kebijakan Privasi - Pasangan Usaha & Investor'
                ],
                'year' => 2024,
                'file_url' => 'privacy-policies/01JM9Q9EV037WTEMXKSAN2CTDG.pdf'
            ],
            [
                'description' => [
                    'en' => 'Privacy Policy - Staff',
                    'id' => 'Kebijakan Privasi - Tenaga Alih Daya'
                ],
                'year' => 2024,
                'file_url' => 'privacy-policies/01JM9QATVFYV01DVW5BW94H5M8.pdf'
            ],
            [
                'description' => [
                    'en' => 'Privacy Policy - Trainee',
                    'id' => 'Kebijakan Privasi - Peserta Pemagangan'
                ],
                'year' => 2024,
                'file_url' => 'privacy-policies/01JM9QB6BWARX5A0ATM8PB1CHV.pdf'
            ],
            [
                'description' => [
                    'en' => 'Privacy Policy - Third Party',
                    'id' => 'Kebijakan Privasi - Pihak Ketiga'
                ],
                'year' => 2024,
                'file_url' => 'privacy-policies/01JM9QBNS45BE876JRD8W0FFEA.pdf'
            ]
        ];

        foreach ($policies as $policy) {
            $createdPolicy = PrivacyPolicy::updateOrCreate(
                $policy
            );
        }

    }
}
