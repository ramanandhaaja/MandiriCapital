<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    public function run(): void
    {

        // Create categories
        $contacts = [
            [
            'contact_title' => [
                'en' => "More details?<br/>Contact Us",
                'id' => "Hubungi Kami"
            ],
            'map_title' => [
                'en' => "Visit Our Office",
                'id' => "Kunjungi Kantor Kami"
            ],
            'email_contact_title' => [
                'en' => "EMAIL",
                'id' => "EMAIL"
            ],
            'email_customer_report_title' => [
                'en' => "MCI's Whistleblowing ",
                'id' => "Whistleblowing MCI's"
            ],
            'email_customer_report_tooltip' => [
                'en' => "Reporting Violations of Mandiri Capital Employees.",
                'id' => "Mengelola laporan pelanggaran karyawan Mandiri Capital."
            ],
            'phone_title' => [
                'en' => "PHONE",
                'id' => "TELEPON"
            ],
            'social_media_title' => [
                'en' => "VISIT OUR SOCIAL MEDIA",
                'id' => "KUNJUNGI MEDIA SOSIAL KAMI"
            ],
            'email_form' => 'info@mandiri-capital.co.id',
            'email_contact' => 'info@mandiri-capital.co.id',
            'email_customer_report' => 'mcicare@mandiri-capital.co.id',
            'phone' => '+62-21-5266661',
            'address' => 'Menara Mandiri II, 14th Floor Jl. Jend. Sudirman Kav No. 54-55, Jakarta 12190',
            ],
        ];

        foreach ($contacts as $data) {
            Contact::create($data);
        }

    }
}
