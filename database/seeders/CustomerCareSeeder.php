<?php

namespace Database\Seeders;

use App\Models\CustomerCare;
use App\Models\CustomerCareHow;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sub-articles for first article
        $customerCare = [
            [
                'customer_care_title'=> [
                    'en' => "Consumer Complaint",
                    'id' => "Keluhan Konsumen"
                ],
                'customer_care_subtitle'=> [
                    'en' => "Handling Mandiri Capital Indonesia Information on the flow of submitting consumer complaints.",
                    'id' => "Informasi Mandiri Capital Indonesia tentang alur pengajuan keluhan konsumen."
                ],
                'customer_care_icon1'=>'01',
                'customer_care_icon2'=>'02',
                'customer_care_icon3'=>'03',
                'customer_care_icon4'=>'04',
                'customer_care_icon5'=>'',
                'customer_care_icon6'=>'',
                'customer_care_title1'=> [
                    'en' => "Consumers Submit Complaints ",
                    'id' => "Konsumen Mengajukan Keluhan"
                ],
                'customer_care_title2'=> [
                    'en' => "Data Verification and Recording of Complaints",
                    'id' => "Verifikasi Data dan Pencatatan Keluhan"
                ],
                'customer_care_title3'=> [
                    'en' => "Investment Opportunities",
                    'id' => "Peluang Investasi"
                ],
                'customer_care_title4'=> [
                    'en' => "Complaint Resolution",
                    'id' => "Penyelesaian Keluhan"
                ],
                'customer_care_title5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'customer_care_title6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'customer_care_content1'=> [
                    'en' => "Complaints are submitted through available media.",
                    'id' => "Keluhan disampaikan melalui media yang tersedia."
                ],
                'customer_care_content2'=> [
                    'en' => "Mandiri Capital Indonesia officer verifies data and records complaints for follow up.",
                    'id' => "Petugas Mandiri Capital Indonesia memverifikasi data dan mencatat keluhan untuk ditindaklanjuti."
                ],
                'customer_care_content3'=> [
                    'en' => "Mandiri Capital Indonesia will follow up and resolve complaints according to the settlement period. Afterwards, a complaint receipt will be submitted.",
                    'id' => "Mandiri Capital Indonesia akan menindaklanjuti dan menyelesaikan keluhan sesuai dengan jangka waktu penyelesaian. Setelah itu, tanda terima keluhan akan disampaikan."
                ],
                'customer_care_content4'=> [
                    'en' => "If the consumer has accepted the complaint settlement, then the complaint is considered completed. If the consumer does not accept the settlement, the consumer can conduct dispute resolution outside the court (LAPS) or through the court.",
                    'id' => "Jika konsumen telah menerima penyelesaian keluhan, maka keluhan dianggap selesai. Jika konsumen tidak menerima penyelesaian, konsumen dapat melakukan penyelesaian sengketa di luar pengadilan (LAPS) atau melalui pengadilan."
                ],
                'customer_care_content5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'customer_care_content6'=> [
                    'en' => "",
                    'id' => ""
                ],

            ],
        ];

        foreach ($customerCare as $article) {
            CustomerCare::updateOrCreate(
                $article
            );
        }

        // Sub-articles for first article
        $customerCareHow = [
            [
                'customer_care_title'=> [
                    'en' => "How to File a Complaint",
                    'id' => "Cara Mengajukan Keluhan"
                ],
                'customer_care_icon1'=>'platforms/01JMA7XX0GNKSX6M4NN3S5RV4M.png',
                'customer_care_icon2'=>'platforms/01JMA7XX0KYJRPF7193MWJVHB2.png',
                'customer_care_icon3'=>'platforms/01JMA7XX0MH9DXY36JP8Y6QJR6.png',
                'customer_care_icon4'=>'platforms/01JMA7XX0NZC78YXZ1AP2VJ6BW.png',
                'customer_care_title1'=> [
                    'en' => "Call MCI",
                    'id' => "Hubungi MCI"
                ],
                'customer_care_title2'=> [
                    'en' => "Email",
                    'id' => "Email"
                ],
                'customer_care_title3'=> [
                    'en' => "Instagram",
                    'id' => "Instagram"
                ],
                'customer_care_title4'=> [
                    'en' => "Office Letter",
                    'id' => "Surat Kantor"
                ],
                'customer_care_content1'=> "021-5266661",
                'customer_care_content2'=> "mcicare@mandiri-capital.co.id",
                'customer_care_content3'=> "@mandiricapital",
                'customer_care_content4'=> "Menara Mandiri II, 14th Floor Jl. Jend. Sudirman Kav No. 54-55, Jakarta 12190",
            ],
        ];

        foreach ($customerCareHow as $article) {
            CustomerCareHow::updateOrCreate(
                $article
            );
        }




    }
}
