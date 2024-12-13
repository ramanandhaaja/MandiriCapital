<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;
use App\Models\PublicationEmailRegistered;
use App\Models\PublicationEmailDownload;

class PublicationEmailSeeder extends Seeder
{
    public function run()
    {
        // Seed report_email_registered table
        PublicationEmailRegistered::create([
            'name' => 'Nandha',
            'company_name' => 'Nandha Registered',
            'email' => 'nandha@nandha.com'
        ]);

        // Seed report_email_download table
        PublicationEmailDownload::create([
            'name' => 'Nandha',
            'company_name' => 'Nandha Download',
            'email' => 'nandha@nandha.com'
        ]);
    }
}
