<?php

namespace Database\Seeders;

use App\Models\AboutTeam;
use App\Models\AboutTeamCategory;
use App\Models\AboutTeamHeadline;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutTeamSeeder extends Seeder
{
    public function run(): void
    {

        $teamHeadlines = [
            [
                'title' => [
                    'en' => 'Meet the team making things happen at MCI',
                    'id' => 'Kenali tim yang membuat segalanya terjadi di MCI'
                ],
                'content' => [
                    'en' => 'Our team is packed with talent, creativity, and a whole lot of personality. We\'re a group of bright minds and big thinkers who love what we do—and have a great time doing it. From tackling challenges to coming up with fresh ideas, every team member brings something unique to the table. Together, we make work exciting, inspiring, and just a little more fun every day. Come get to know us!',
                    'id' => 'Tim kami dipenuhi dengan talenta, kreativitas, dan kepribadian yang beragam. Kami adalah kumpulan pemikir cemerlang dan visioner yang mencintai pekerjaan kami—dan menikmati setiap prosesnya. Mulai dari mengatasi tantangan hingga menciptakan ide-ide segar, setiap anggota tim membawa keunikan mereka sendiri. Bersama-sama, kami membuat pekerjaan menjadi menyenangkan, menginspirasi, dan sedikit lebih mengasyikkan setiap harinya. Mari berkenalan dengan kami!'
                ],
            ],
        ];

        foreach ($teamHeadlines as $data) {
            AboutTeamHeadline::create($data);
        }



        $jobGroups = [
            [
                'name' => [
                    'en' => 'Board of Commissioners',
                    'id' => 'Dewan Komisaris'
                ],
                'order' => 1,
            ],
            [
                'name' => [
                    'en' => 'Board of Directors',
                    'id' => 'Dewan Direksi'
                ],
                'order' => 2,
            ],
            [
                'name' => [
                    'en' => 'Venture Fund',
                    'id' => 'Dana Ventura'
                ],
                'order' => 3,
            ],
            [
                'name' => [
                    'en' => 'Investment',
                    'id' => 'Investasi'
                ],
                'order' => 4,
            ],
            [
                'name' => [
                    'en' => 'Value Creation',
                    'id' => 'Penciptaan Nilai'
                ],
                'order' => 5,
            ],
            [
                'name' => [
                    'en' => 'Legal, Compliance & HR',
                    'id' => 'Legal, Kepatuhan & SDM'
                ],
                'order' => 6,
            ],
            [
                'name' => [
                    'en' => 'Risk & Portfolio Management',
                    'id' => 'Manajemen Risiko & Portofolio'
                ],
                'order' => 7,
            ],
            [
                'name' => [
                    'en' => 'Finance & Treasury',
                    'id' => 'Keuangan & Treasuri'
                ],
                'order' => 8,
            ],
            [
                'name' => [
                    'en' => 'Corsec & Operations',
                    'id' => 'Sekretaris Perusahaan & Operasional'
                ],
                'order' => 9,
            ],
            [
                'name' => [
                    'en' => 'Internal Audit',
                    'id' => 'Audit Internal'
                ],
                'order' => 10,
            ],
            [
                'name' => [
                    'en' => 'Special Project',
                    'id' => 'Proyek Khusus'
                ],
                'order' => 11,
            ],
            [
                'name' => [
                    'en' => 'Executive Assistant to BOD',
                    'id' => 'Asisten Eksekutif Dewan Direksi'
                ],
                'order' => 12,
            ],
        ];

        foreach ($jobGroups as $data) {
            AboutTeamCategory::create($data);
        }



        $datas = [
            [
                'name' => 'Alamanda Shantika',
                'title' => [
                    'en' => 'Independent Commissioner',
                    'id' => 'Komisaris Independen'
                ],
                'about_team_category_id' => 1,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SATDFDBTP4GDBQEB6R4PM.png'
            ],
            [
                'name' => 'Ronald S. Simorangkir',
                'title' => [
                    'en' => 'Chief Executive Officer',
                    'id' => 'Direktur Utama'
                ],
                'about_team_category_id' => 2,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SB2Q865FEAM6A5RCKCKHC.png'
            ],
            [
                'name' => 'Wisnu Setiadi',
                'title' => [
                    'en' => 'Chief Financial Officer',
                    'id' => 'Direktur Keuangan'
                ],
                'about_team_category_id' => 2,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SBCWG26E4XSJPPHTFPNTX.png'
            ],
            [
                'name' => 'Muhammad Salman',
                'title' => [
                    'en' => 'VP Venture Fund',
                    'id' => 'VP Dana Ventura'
                ],
                'about_team_category_id' => 3,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SBPKKJXF1PKC1A4XK2AWJ.png'
            ],
            [
                'name' => 'Muhammad Rusyad',
                'title' => [
                    'en' => 'Venture Fund',
                    'id' => 'Dana Ventura'
                ],
                'about_team_category_id' => 3,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SC0PW855P8HWV4VVD0T02.png'
            ],
            [
                'name' => 'Oktavia Larasati',
                'title' => [
                    'en' => 'Venture Fund',
                    'id' => 'Dana Ventura'
                ],
                'about_team_category_id' => 3,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SCAAT3JGD2DFD8Y16SMZ5.png'
            ],
            [
                'name' => 'Faris Iman',
                'title' => [
                    'en' => 'SVP Investment',
                    'id' => 'SVP Investasi'
                ],
                'about_team_category_id' => 4,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SED7N3G3CR1DP0G5THRCS.png'
            ],
            [
                'name' => 'Melvin Santoso',
                'title' => [
                    'en' => 'Investment',
                    'id' => 'Investasi'
                ],
                'about_team_category_id' => 4,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SFP0DRK681E8HVH4QKYQM.png'
            ],
            [
                'name' => 'Aldwin Riyaz Fadlurrahman',
                'title' => [
                    'en' => 'Investment',
                    'id' => 'Investasi'
                ],
                'about_team_category_id' => 4,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SG0T93EP3VAR4DZCAQ1YD.png'
            ],
            [
                'name' => 'Muhammad Ilyas',
                'title' => [
                    'en' => 'Investment',
                    'id' => 'Investasi'
                ],
                'about_team_category_id' => 4,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SGDE10B6QRCBQBN9R4ECM.png'
            ],
            [
                'name' => 'Rabbi Amrita Givatama',
                'title' => [
                    'en' => 'EVP Value Creation',
                    'id' => 'EVP Penciptaan Nilai'
                ],
                'about_team_category_id' => 5,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SGTJ782QGXM6JSMS5ZDY3.png'
            ],
            [
                'name' => 'Fleta Jovitasari',
                'title' => [
                    'en' => 'Value Creation',
                    'id' => 'Penciptaan Nilai'
                ],
                'about_team_category_id' => 5,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SHJVFJ1BYMVZ656EN3XN4.png'
            ],
            [
                'name' => 'Safira Azalia',
                'title' => [
                    'en' => 'Value Creation',
                    'id' => 'Penciptaan Nilai'
                ],
                'about_team_category_id' => 5,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SJ4WYYRNW8Y4KFG1E91TR.png'
            ],
            [
                'name' => 'Nathania Orlana',
                'title' => [
                    'en' => 'Value Creation',
                    'id' => 'Penciptaan Nilai'
                ],
                'about_team_category_id' => 5,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK3JVJ9ZS2AZ3VSWR17P4SBS.jpg'
            ],
            [
                'name' => 'Natasya Monica Tumundo',
                'title' => [
                    'en' => 'SVP Legal, Compliance & HR',
                    'id' => 'SVP Hukum, Kepatuhan & SDM'
                ],
                'about_team_category_id' => 6,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SJJQMQK44975NSYPGA6M3.png'
            ],
            [
                'name' => 'Auginta Narasti Putri',
                'title' => [
                    'en' => 'Legal',
                    'id' => 'Hukum'
                ],
                'about_team_category_id' => 6,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SK37DBPPFVQVR2G1PBM8Q.png'
            ],
            [
                'name' => 'Dipo Prima',
                'title' => [
                    'en' => 'HC',
                    'id' => 'HC'
                ],
                'about_team_category_id' => 6,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SKJ13Y5Q4MXEE4NT23VKS.png'
            ],
            [
                'name' => 'Luna Amirahdya',
                'title' => [
                    'en' => 'Compliance',
                    'id' => 'Kepatuhan'
                ],
                'about_team_category_id' => 6,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SKX294SBZ2K7FBT7GCZQK.png'
            ],
            [
                'name' => 'Adrian Jonathan',
                'title' => [
                    'en' => 'Legal & Compliance',
                    'id' => 'Hukum & Kepatuhan'
                ],
                'about_team_category_id' => 6,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK3JW5GR495FY9GAB49FCW61.jpeg'
            ],
            [
                'name' => 'Ahmat Sahri',
                'title' => [
                    'en' => 'VP Risk & Portfolio Management',
                    'id' => 'VP Manajemen Risiko & Portofolio'
                ],
                'about_team_category_id' => 7,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SMDG1P3R09HEV7TDC86DA.png'
            ],
            [
                'name' => 'Sthira Aryapradipta S.',
                'title' => [
                    'en' => 'Risk & Portfolio Management',
                    'id' => 'Manajemen Risiko & Portofolio'
                ],
                'about_team_category_id' => 7,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SMTA1ZTQ1CVSKJKWBAZRZ.png'
            ],
            [
                'name' => 'Thalia Shizuka',
                'title' => [
                    'en' => 'Risk & Portfolio Management',
                    'id' => 'Manajemen Risiko & Portofolio'
                ],
                'about_team_category_id' => 7,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SNTXTD5ZFAKXA5KCNFW1Y.png'
            ],
            [
                'name' => 'Mohammad Iqbal',
                'title' => [
                    'en' => 'VP Finance & Treasury',
                    'id' => 'VP Keuangan & Perbendaharaan'
                ],
                'about_team_category_id' => 8,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SPDCST2S9E7CJRCM67P9S.png'
            ],
            [
                'name' => 'Camelia Magdalena',
                'title' => [
                    'en' => 'Finance & Treasury',
                    'id' => 'Keuangan & Perbendaharaan'
                ],
                'about_team_category_id' => 8,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK3K2NWB2N6RNECPVNMPHNY3.jpeg'
            ],
            [
                'name' => 'Gracia Anglani',
                'title' => [
                    'en' => 'Finance & Treasury',
                    'id' => 'Keuangan & Perbendaharaan'
                ],
                'about_team_category_id' => 8,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SQDNX4D63APGXNZ2X3MPE.png'
            ],
            [
                'name' => 'Delvin Theodorus Hansell',
                'title' => [
                    'en' => 'Finance & Treasury',
                    'id' => 'Keuangan & Perbendaharaan'
                ],
                'about_team_category_id' => 8,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK3JTT4R4E7AZEKV99H2XPZG.jpeg'
            ],
            [
                'name' => 'Ade Lydia',
                'title' => [
                    'en' => 'Team Leader Corsec & Operations',
                    'id' => 'Pemimpin Tim Corsec & Operasional'
                ],
                'about_team_category_id' => 9,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SQXE4VM4GHVMYCGHAK8NS.png'
            ],
            [
                'name' => 'Yuda Arisitian',
                'title' => [
                    'en' => 'IT & Operations',
                    'id' => 'TI & Operasional'
                ],
                'about_team_category_id' => 9,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SRFJB1RNJS0E5JQHMENN2.png'
            ],
            [
                'name' => 'Inggrid Anggi Purnama',
                'title' => [
                    'en' => 'Corsec & Operations',
                    'id' => 'Corsec & Operasional'
                ],
                'about_team_category_id' => 9,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SS28WAM9WVT41S3H99S1D.png'
            ],
            [
                'name' => 'Raina Safa Radhyana Rahmat',
                'title' => [
                    'en' => 'Corsec & Operations',
                    'id' => 'Corsec & Operasional'
                ],
                'about_team_category_id' => 9,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SSJHE03DTFBA10DBKMQR2.jpeg'
            ],
            [
                'name' => 'Nabila Fauzia',
                'title' => [
                    'en' => 'Internal Audit',
                    'id' => 'Audit Internal'
                ],
                'about_team_category_id' => 10,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2ST6DJXFAHY967EWJK2GQ3.png'
            ],
            [
                'name' => 'Hira Laksamana',
                'title' => [
                    'en' => 'EVP Special Project',
                    'id' => 'EVP Proyek Khusus'
                ],
                'about_team_category_id' => 11,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2STP6MFQQPTD0H5CR04JZG.png'
            ],
            [
                'name' => 'Dinar Meikaratri',
                'title' => [
                    'en' => 'Executive Assistant',
                    'id' => 'Asisten Eksekutif'
                ],
                'about_team_category_id' => 12,
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2SV4VQ8HXGCHQGATKPFJ3T.png'
            ]
        ];

        foreach ($datas as $data) {
            AboutTeam::create($data);
        }
    }
}
