<?php

namespace Database\Seeders;

use App\Models\PlatformValueCreationXponent;
use App\Models\PlatformValueCreationYaxis;
use App\Models\PlatformValueCreationZenith;
use App\Models\PortfolioFundingArticleSub;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformValueCreationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Sub-articles for first article
        $xponenent = [
            [
                'hero_text' => [
                    'en' => "Business Matchmaking between startups and Mandiri Group",
                    'id' => "Pertemuan Usaha antara startup dan Mandiri Group"
                ],
                'hero_image' => 'platforms/01JM0A3TDRDEZ4307D88CZV47C.png',
                'hero_background' => 'platforms/01JM0A3TDTVZS5FG61SN9AZ8YE.png',
                'headline'=> [
                    'en' => "",
                    'id' => ""
                ],
                'counter1_title'=> [
                    'en' => "Startups",
                    'id' => "Startup"
                ],
                'counter2_title'=> [
                    'en' => "Mandiri Business Units",
                    'id' => "Unit Bisnis Mandiri"
                ],
                'counter3_title'=> [
                    'en' => "Business Deals",
                    'id' => "Usaha Bisnis"
                ],
                'counter1_value' => [
                    'en' => "65+",
                    'id' => "65+"
                ],
                'counter2_value' => [
                    'en' => "20+",
                    'id' => "20+"
                ],
                'counter3_value' => [
                    'en' => "10+",
                    'id' => "10+"
                ],
                'whyexponent_title'=> [
                    'en' => "Why You Should Join Xponent?",
                    'id' => "Mengapa Anda Harus Bergabung dengan Xponent?"
                ],
                'whyexponent_subtitle'=> [
                    'en' => "Practical 3-Month Program of Venture Development and Synergy Creation",
                    'id' => "Program Praktis 3 Bulan Pengembangan Usaha dan Kreatifitas Sumber Daya"
                ],
                'whyexponent_icon1'=>'01',
                'whyexponent_icon2'=>'02',
                'whyexponent_icon3'=>'03',
                'whyexponent_icon4'=>'04',
                'whyexponent_icon5'=>'',
                'whyexponent_icon6'=>'',
                'whyexponent_title1'=> [
                    'en' => "Network",
                    'id' => "Jaringan"
                ],
                'whyexponent_title2'=> [
                    'en' => "Business Growth",
                    'id' => "Pertumbuhan Bisnis"
                ],
                'whyexponent_title3'=> [
                    'en' => "Investment Opportunities",
                    'id' => "Kesempatan Investasi"
                ],
                'whyexponent_title4'=> [
                    'en' => "Exposure",
                    'id' => "Eksposur"
                ],
                'whyexponent_title5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyexponent_title6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyexponent_content1'=> [
                    'en' => "Bringing you to the biggest financial conglomerate bank in Indonesia with 120+ business units to explore.",
                    'id' => "Menghubungkan Anda dengan bank keuangan terbesar di Indonesia dengan 120+ unit bisnis untuk dijangkau."
                ],
                'whyexponent_content2'=> [
                    'en' => "We help startups to build business traction.",
                    'id' => "Membantu startup untuk membangun pertumbuhan bisnis."
                ],
                'whyexponent_content3'=> [
                    'en' => "Meet our investment team and secure strategic investment from Mandiri Capital Indonesia.",
                    'id' => "Kunjungi tim investasi kami dan ikuti investasi strategis dari Mandiri Capital Indonesia."
                ],
                'whyexponent_content4'=> [
                    'en' => "Unique opportunity to showcase your statup, expand your network, and potentially generate new business deals.",
                    'id' => "Kesempatan unik untuk menampilkan startup Anda, meningkatkan jaringan, dan mungkin menghasilkan transaksi bisnis baru."
                ],
                'whyexponent_content5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyexponent_content6'=> [
                    'en' => "",
                    'id' => ""
                ],

                'insideexponent_title'=> [
                    'en' => "Inside Xponent",
                    'id' => "Dalam Xponent"
                ],
                'insideexponent_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'insideexponent_icon1'=>'01',
                'insideexponent_icon2'=>'02',
                'insideexponent_title1'=> [
                    'en' => "Business Matchmaking",
                    'id' => "Pertemuan Bisnis"
                ],
                'insideexponent_title2'=> [
                    'en' => "Industry Insight Sessions",
                    'id' => "Sesi Insight Industri"
                ],
                'insideexponent_content1'=> [
                    'en' => "Join us for an exclusive Business Matchmaking Session that brings together the brightest startups and Mandiri Group, driving collaboration and growth.",
                    'id' => "Bergabunglah dengan kami dalam Sesi Pertemuan Bisnis eksklusif yang mempertemukan startup terbaik dengan Grup Mandiri, mendorong kolaborasi dan pertumbuhan."
                ],
                'insideexponent_content2'=> [
                    'en' => "Industry Insight Session is a program that offers attendees new industry insight from a panel discussion session, that bring practitioners from various industries.",
                    'id' => "Sesi Wawasan Industri adalah program yang menawarkan peserta wawasan industri baru dari sesi diskusi panel, yang menghadirkan praktisi dari berbagai industri."
                ],
                'image_path1'=> 'platforms/01JM0A582EGCMXK9X0JC7JASTW.png',
                'image_path2'=> '',
                'image_path3'=> '',
                'image_path4'=> '',
                'image_path5'=> '',
                'testimonialexponent_title'=> [
                    'en' => "About The Program",
                    'id' => "Tentang Program"
                ],
                'testimonialexponent_subtitle'=> [
                    'en' => "Testimonies",
                    'id' => "Testimoni"
                ],
                'testimonialexponent_logo1'=> 'platforms/01JMEW1BH226MV411KCXCG49NM.png',
                'testimonialexponent_logo2'=> 'platforms/01JMEW1BH4TB0SKM7DX7DQS59Q.png',
                'testimonialexponent_logo3'=> 'platforms/01JMEW1BH5A4GB15MF5AVE8H1Q.png',
                'testimonialexponent_logo4'=> '',
                'testimonialexponent_logo5'=> '',
                'testimonialexponent_logo6'=> '',
                'testimonialexponent_founder1'=> 'Yohanes Sughitononughroho',
                'testimonialexponent_founder2'=> 'Ryan Manafe',
                'testimonialexponent_founder3'=> 'Chiragh Kipralani',
                'testimonialexponent_founder4'=> '',
                'testimonialexponent_founder5'=> '',
                'testimonialexponent_founder6'=> '',
                'testimonialexponent_title1'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialexponent_title2'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialexponent_title3'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialexponent_title4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialexponent_title5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialexponent_title6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialexponent_content1'=> [
                    'en' => "CI & Bank Mandiri Greatly assisted CROWDE in providing access and connections to financial industry players, particularly banking.",
                    'id' => "CI & Bank Mandiri sangat membantu CROWDE dalam menyediakan akses dan koneksi ke pelaku industri keuangan, terutama perbankan."
                ],
                'testimonialexponent_content2'=> [
                    'en' => "We can meet everyone from Mandiri Capital, other business units. We can know what parts are relevant to us, we can even meet directly with stakeholders so we can follow-up specifically on what and what added value we can offer.",
                    'id' => "Kami dapat bertemu dengan semua orang dari Mandiri Capital, unit bisnis lainnya. Kami dapat mengetahui bagian mana yang relevan untuk kami, bahkan kami dapat bertemu langsung dengan pemangku kepentingan sehingga kami dapat menindaklanjuti secara spesifik tentang nilai tambah apa yang dapat kami tawarkan."
                ],
                'testimonialexponent_content3'=> [
                    'en' => "It is an honor for ayoconnect to be given the trust of Bank Mandiri to be able to collaborate from implementing integrated embedded usecases for Livin' customers so that they can enjoy the best variety of services in just one.",
                    'id' => "Merupakan suatu kehormatan bagi ayoconnect untuk diberikan kepercayaan oleh Bank Mandiri untuk dapat berkolaborasi dalam mengimplementasikan usecase terintegrasi yang tertanam bagi pelanggan Livin' sehingga mereka dapat menikmati berbagai layanan terbaik hanya dalam satu tempat."
                ],
                'testimonialexponent_content4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialexponent_content5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialexponent_content6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'footer_text'=> [
                    'en' => "Discover What's Possible",
                    'id' => "Temukan Apa Yang Mungkin"
                ],
            ],
        ];

        foreach ($xponenent as $article) {
            PlatformValueCreationXponent::updateOrCreate(
                $article
            );
        }


        $yaxis = [
            [
                'hero_text' => [
                    'en' => "Networking and Collaboration Platform",
                    'id' => "Platform Networking dan Kolaborasi"
                ],
                'hero_image' => 'platforms/01JM0BABAKP567FZN6WN7XNWM0.png',
                'headline'=> [
                    'en' => "Networking and collaboration platform designed to connect startups, corporations, regulator, and tech communities. Y-axis is a catalyst for building a stronger, more collaborative ecosystem",
                    'id' => "Platform Networking dan Kolaborasi yang dirancang untuk menghubungkan startup, perusahaan, regulator, dan komunitas teknologi. Y-axis adalah katalis untuk membangun ekosistem yang lebih kuat dan lebih kolaboratif"
                ],
                'footer_text'=> [
                    'en' => "Connecting the Dots",
                    'id' => "Menghubungkan Titik"
                ],
                'image_path1'=> 'platforms/01JM0BABAQZ5G3N1YN5X43C6PH.png',
                'image_path2'=> '',
                'image_path3'=> '',
                'image_path4'=> '',
                'image_path5'=> '',

            ],
        ];

        foreach ($yaxis as $article) {
            PlatformValueCreationYaxis::updateOrCreate(
                $article
            );
        }



        $zenith = [
            [
                'hero_text' => [
                    'en' => "Zenith Startup <br/>Accelerator",
                    'id' => "Zenith Startup <br/>Accelerator"
                ],
                'hero_image' => 'platforms/01JM0ESYCBZFPXWT0JTH44G3PH.png',
                'hero_background' => '',
                'headline'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_title'=> [
                    'en' => "Why You Should Join Zenith?",
                    'id' => "Mengapa Anda Harus Bergabung dengan Zenith?"
                ],
                'whyzenith_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_icon1'=>'platforms/01JM0FM9Z6YMM9YQS7AGCZ6KB6.png',
                'whyzenith_icon2'=>'platforms/01JM0FM9Z8H6M8H2R0EZC4XA4F.png',
                'whyzenith_icon3'=>'platforms/01JM0FM9Z9JVKKX4DZFHK9W1QA.png',
                'whyzenith_icon4'=>'',
                'whyzenith_icon5'=>'',
                'whyzenith_icon6'=>'',
                'whyzenith_title1'=> [
                    'en' => "Networking Opportunities",
                    'id' => "Jaringan"
                ],
                'whyzenith_title2'=> [
                    'en' => "Funding Access",
                    'id' => "Akses Finansial"
                ],
                'whyzenith_title3'=> [
                    'en' => "Global Access",
                    'id' => "Akses Global"
                ],
                'whyzenith_title4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_title5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_title6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_content1'=> [
                    'en' => "Expand your business reach by connecting with industry leaders, potential clients, and investors.",
                    'id' => "Mengembangkan jaringan bisnis Anda dengan berhubungan dengan pemimpin industri, klien potensial, dan investor."
                ],
                'whyzenith_content2'=> [
                    'en' => "Unlock diverse investment prospects and explore potential funding opportunities from Mandiri Capital Indonesia and other investor partners.",
                    'id' => "Buka potensi investasi beragam dan eksplorasi potensi investasi dari Mandiri Capital Indonesia dan partner investor lain."
                ],
                'whyzenith_content3'=> [
                    'en' => "Enhance your market presence with access to global companies and global networking opportunities provided by MCI.",
                    'id' => "Meningkatkan presensi pasar Anda dengan akses ke perusahaan global dan jaringan global yang diberikan oleh MCI."
                ],
                'whyzenith_content4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_content5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'whyzenith_content6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'insidezenith_title'=> [
                    'en' => "Inside Zenith",
                    'id' => "Dalam Zenith"
                ],
                'insidezenith_subtitle'=> [
                    'en' => "",
                    'id' => ""
                ],
                'insidezenith_icon1'=>'platforms/01JM0FM9ZCC1VFHSNBVMNH6RYK.png',
                'insidezenith_icon2'=>'platforms/01JM0FM9ZD625V0JHCANFR7FA1.png',
                'insidezenith_icon3'=>'platforms/01JM0FM9ZEFAP78XQV86DRSYGE.png',
                'insidezenith_title1'=> [
                    'en' => "Expert Insights",
                    'id' => "Wawasan Expert"
                ],
                'insidezenith_title2'=> [
                    'en' => "Synergy Creation",
                    'id' => "Kerjasama"
                ],
                'insidezenith_title3'=> [
                    'en' => "Accelerated Access",
                    'id' => "Akselerasi Akses"
                ],
                'insidezenith_content1'=> [
                    'en' => "Gain cutting-edge knowledge through in-depth mentoring sessions, expert led workshops, and personalized 1:1 mentoring.",
                    'id' => "Dapatkan wawasan terbaru melalui sesi mentoring yang mendalam, workshop yang diarahkan oleh praktisi, dan mentoring 1:1 personalisasi."
                ],
                'insidezenith_content2'=> [
                    'en' => "Industry Insight Session is a program that offers attendees new industry insight from a panel discussion session, that bring practitioners from various industries.",
                    'id' => "Sesi Wawasan Industri adalah program yang menawarkan peserta wawasan industri baru dari sesi diskusi panel, yang menghadirkan praktisi dari berbagai industri."
                ],
                'insidezenith_content3'=> [
                    'en' => "Benefit from expedited access to Bank Mandiri’s banking products, impact measurement, people management, HR services, legal practice, & cloud services.",
                    'id' => "Manfaatkan akses cepat ke produk banking Bank Mandiri, pengukuran impak, manajemen orang, layanan HR, praktik hukum, dan layanan cloud."
                ],
                'deal_title'=> [
                    'en' => "10+ Business Deals",
                    'id' => "10+ Usaha Bisnis"
                ],
                'deal_image_path1'=> 'platforms/01JM0FZWKZ33D8FCF9SMCAJ8V7.png',
                'deal_image_path2'=> 'platforms/01JM0FZWM1BXGCH6XX755MPPKC.png',
                'deal_image_path3'=> 'platforms/01JM0FZWM2HSG14KR3SJ99PVYX.png',
                'deal_image_path4'=> 'platforms/01JM0FZWM3SDWPZXDYZYX1S25A.png',
                'deal_image_path5'=> 'platforms/01JM0FZWM4C2FGC86B038XZTWX.png',
                'deal_image_path6'=> 'platforms/01JM0FZWM58RQEGGZ0RH7TH9QA.png',
                'image_path1'=> 'platforms/01JM0GMJMGA8F82THMXDGXYCT3.mp4',
                'image_path2'=> 'platforms/01JM0GNGVPMEDVGCQZ381SH0MQ.png',
                'image_path3'=> '',
                'image_path4'=> '',
                'image_path5'=> '',
                'testimonialzenith_title'=> [
                    'en' => "About The Program",
                    'id' => "Tentang Program"
                ],
                'testimonialzenith_subtitle'=> [
                    'en' => "Testimonies",
                    'id' => "Testimoni"
                ],
                'testimonialzenith_logo1'=> 'platforms/01JM0G3JSHH5VEC4E521R7CXWJ.png',
                'testimonialzenith_logo2'=> 'platforms/01JM0G3JSKTASN4N8GWZZFGHJY.png',
                'testimonialzenith_logo3'=> 'platforms/01JM0G3JSM4650WB33Q0FBJK2M.png',
                'testimonialzenith_logo4'=> '',
                'testimonialzenith_logo5'=> '',
                'testimonialzenith_logo6'=> '',
                'testimonialzenith_founder1'=> 'Joselin Olivia',
                'testimonialzenith_founder2'=> 'Bayu Anggara',
                'testimonialzenith_founder3'=> 'Natali Ardianto',
                'testimonialzenith_founder4'=> '',
                'testimonialzenith_founder5'=> '',
                'testimonialzenith_founder6'=> '',
                'testimonialzenith_title1'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialzenith_title2'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialzenith_title3'=> [
                    'en' => "CEO & Co-Founder",
                    'id' => "CEO & Co-Founder"
                ],
                'testimonialzenith_title4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialzenith_title5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialzenith_title6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialzenith_content1'=> [
                    'en' => "During the mentorship sessions with Astra International, the discussion focused on a successful synergy project, possibly because Imajin and Astra target the same industry. I believe that every industry has it own unique approach, wich is why the sharing session ath time was quiet insightful, especialy for the manufavturing and automative industries.",
                    'id' => "Pada sesi mentoring dengan Astra International, diskusi fokus pada proyek kesuksesan bersama, mungkin karena Imajin dan Astra bergerak di industri yang sama. Saya percaya setiap industri memiliki approach yang unik, yang membuat sesi sharing pada waktu itu sangat menarik dan khusus untuk industri manufaktur dan otomotif."
                ],
                'testimonialzenith_content2'=> [
                    'en' => "Fishlog succesfully collaborated with mandiri SME to develop a loan referral program for the fisheries industry, valued at 50 billion rupiah.",
                    'id' => "Fishlog berhasil berkolaborasi dengan mandiri SME untuk mengembangkan program referensi pinjaman untuk industri perikanan, bernilai 50 miliar rupiah."
                ],
                'testimonialzenith_content3'=> [
                    'en' => "The mentorship program truly opened my eyes, especially in preparing for my future series B fundraising. There were many insights from that time that i still remember today, and i know i need to be even more prepeared because, statistically, Series B fundraising is the thouhest.",
                    'id' => "Program mentoring ini benar-benar membuka mata saya, khususnya dalam persiapan untuk series B fundraising. Ada banyak wawasan dari waktu itu yang saya ingat lagi hari ini, dan saya tahu bahwa saya perlu lebih berpreparasi karena, statistiknya, Series B fundraising adalah yang terbesar."
                ],
                'testimonialzenith_content4'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialzenith_content5'=> [
                    'en' => "",
                    'id' => ""
                ],
                'testimonialzenith_content6'=> [
                    'en' => "",
                    'id' => ""
                ],
                'footer_text'=> [
                    'en' => "Ignite The Highest Point",
                    'id' => "Hidupkan Puncak Yang Tertinggi"
                ],
            ],
        ];

        foreach ($zenith as $article) {
            PlatformValueCreationZenith::updateOrCreate(
                $article
            );
        }


    }
}
