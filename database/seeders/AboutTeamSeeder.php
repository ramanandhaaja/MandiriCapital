<?php

namespace Database\Seeders;

use App\Models\AboutTeam;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutTeamSeeder extends Seeder
{
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Alamanda Shatika',
                'title' => 'Independent Commissioner',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK126JHGMPFPXYSRWPEWN2ED.jpg'
            ],
            [
                'name' => 'Ronald S. Simorangkir',
                'title' => 'CEO',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12Q8EWRPFGMCKW3WYYXPDP.jpg'
            ],
            [
                'name' => 'Wisnu Setiadi',
                'title' => 'CIO',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12VBZFEFGDHW23PC7E57SB.jpg'
            ],
            [
                'name' => 'Muhammad Salman',
                'title' => 'VP Venture Fund',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12XCVX68ZWG4C76VZRQ9DV.jpg'
            ],
            [
                'name' => 'Muhammad Rusyad',
                'title' => 'Venture Fund',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12XPDCJ29DCCHT760C86AT.jpg'
            ],
            [
                'name' => 'Oktavia Laras',
                'title' => 'Venture Fund',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK138AA7MY7Q80R36966X7HK.jpg'
            ],
            [
                'name' => 'Faris Iman',
                'title' => 'VP Investment',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12GJKDJWVMKT49VB258VK5.jpeg'
            ],
            [
                'name' => 'Melvin Santoso',
                'title' => 'Investment',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK138MXNR6CZ3S5BR8C1E69Y.jpg'
            ],
            [
                'name' => 'Aldwin Riyaz Fadlurrahman',
                'title' => 'Investment',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15NBQSE339GFVY3F073DJH.jpg'
            ],
            [
                'name' => 'Muhammad Ilyas',
                'title' => 'Investment',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15NS9YSM6SWP81ZCD8N779.jpg'
            ],
            [
                'name' => 'Rabbi Amrita Givatama',
                'title' => 'EVP Value Creation',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15P7BPYX3CE243SB1EWD37.jpg'
            ],
            [
                'name' => 'Fleta Jovitasari',
                'title' => 'Value Creation',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15R37FQSV71Y9DQ3X8QPCX.jpg'
            ],
            [
                'name' => 'Safira Azalia',
                'title' => 'Value Creation',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15RGH5J8FPCZFN9ZP1KC2E.jpg'
            ],
            [
                'name' => 'Natasya Monica Tumundo',
                'title' => 'SVP Legal, Compliance & HR',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15RZ4GC4PKQ8G1PSCW97R8.jpg'
            ],
            [
                'name' => 'Auginta Narasti Putri',
                'title' => 'Legal, Compliance & HR',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK15Y5T3T0AQWJJW7FW9Z9VJ.jpg'
            ],
            [
                'name' => 'Dipo Prima',
                'title' => 'Legal, Compliance & HR',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK162R6CT7ZX31ZRYC448X8J.jpg'
            ],
            [
                'name' => 'Luna Amirahdya',
                'title' => 'Legal, Compliance & HR',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK163JBMF0RKPXFYY4NXVFFK.jpg'
            ],
            [
                'name' => 'Ahmat Sahri',
                'title' => 'VP Risk & Portfolio Management',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK164W3Q24YFENJYKGJR4D7D.jpg'
            ],
            [
                'name' => 'Sthira Aryapradipta S.',
                'title' => 'Risk & Portfolio Management',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16A4NB6SYNSQ4DS7WR8EZ4.jpg'
            ],
            [
                'name' => 'Thalia Shizuka',
                'title' => 'Risk & Portfolio Management',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12JF1FMF8SCZRM0535PSFV.jpeg'
            ],
            [
                'name' => 'Mohammad Iqbal',
                'title' => 'VP Finance & Treasury',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16AKP9RH65D32NBP0FS0GY.jpg'
            ],
            [
                'name' => 'Camelia Magdalena',
                'title' => 'Finance & Treasury',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => ''
            ],
            [
                'name' => 'Gracia Anglani',
                'title' => 'Finance & Treasury',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16BESB3A02F8BQZXRV6PAW.jpg'
            ],
            [
                'name' => 'Delvin Theodorus Hansell',
                'title' => 'Finance & Treasury',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => ''
            ],
            [
                'name' => 'Ade Lydia',
                'title' => 'Team Leader Corsec & Operations',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16HV2JDXBP084P73HKVAP0.jpg'
            ],
            [
                'name' => 'Yuda Arisitian',
                'title' => 'IT & Operations',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12K4FF2VD51CV1N3QG2W5N.jpeg'
            ],
            [
                'name' => 'Inggrid Anggi Purnama',
                'title' => 'Procurement',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16J7XC3WKK4KCR0J8T3SVB.jpg'
            ],
            [
                'name' => 'Raina Safa Radhyana Rahmat',
                'title' => 'Social Media',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK12KT8JETKNC0QVHH9TX1Z0.jpeg'
            ],
            [
                'name' => 'Nabila Fauzia',
                'title' => 'Internal Audit',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16MBD8TGRBQK6FEF7PZYB7.jpg'
            ],
            [
                'name' => 'Hira Laksamana',
                'title' => 'EVP Special Project',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16K5VG00PEES7N6QKBYTH4.jpg'
            ],
            [
                'name' => 'Dinar Meikaratri',
                'title' => 'Executive Assistant',
                'content' => 'this is the desc',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK16M14951SWE7QM4R3N8H7C.jpg'
            ]
        ];

        foreach ($datas as $data) {
            AboutTeam::create($data);
        }
    }
}
