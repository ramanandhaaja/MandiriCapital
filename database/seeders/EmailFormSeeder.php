<?php

namespace Database\Seeders;

use App\Models\ContactEmail;
use App\Models\EmailCms;
use App\Models\HomeEmailInvestor;
use App\Models\HomeEmailStartup;
use App\Models\PlatformEmail;
use App\Models\PlatformEmailZenith;
use App\Models\PortfolioEmailInvestor;
use App\Models\PortfolioEmailStartup;
use App\Models\PublicationEmail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmailFormSeeder extends Seeder
{
    public function run(): void
    {

        // HOME STARTUP FORM
        $home_email_startup = [
            [
            'title' => [
                'en' => "Please fill the Form to Pitch With Us",
                'id' => "Silakan isi Formulir untuk Pitch Dengan Kami"
            ],
            'subtitle' => [
                'en' => "*Place your pitchdeck below and our investment team will check it out!</br>*Please note that we receive a high volume of submissions and will not be able to reply to everyone.",
                'id' => "*Letakkan pitchdeck Anda di bawah dan tim investasi kami akan memeriksanya!</br>*Harap dicatat bahwa kami menerima banyak pengajuan dan tidak dapat membalas semuanya."
            ],
            'firstname' => [
                'en' => "First Name",
                'id' => "Nama Depan"
            ],
            'lastname' => [
                'en' => "Last Name",
                'id' => "Nama Belakang"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'phone' => [
                'en' => "Phone Number",
                'id' => "Nomor Telepon"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'website_url' => [
                'en' => "Add URL to your Company Website",
                'id' => "Tambahkan URL Situs Web Perusahaan Anda"
            ],
            'business_sector' => [
                'en' => "Choose your company's main business sector",
                'id' => "Pilih Sektor Bisnis Perusahaan Anda"
            ],
            'upload' => [
                'en' => "Upload Your Files",
                'id' => "Unggah File Anda"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Submit Pitch",
                'id' => "Kirim Pitch"
            ],
            ],
        ];

        foreach ($home_email_startup as $data) {
            HomeEmailStartup::create($data);
        }


        // HOME INVESTOR FORM
        $home_email_investor = [
            [
            'title' => [
                'en' => "We'd Love to hear from you",
                'id' => "Kami Ingin Mendengar dari Anda"
            ],
            'subtitle' => [
                'en' => "MANDIRI CAPITAL INDONESIA</br>Menara Mandiri II, lantai 14.</br>Jl. Jend. Sudirman No. 54-55, Jakarta 12190",
                'id' => "MANDIRI CAPITAL INDONESIA</br>Menara Mandiri II, lantai 14.</br>Jl. Jend. Sudirman No. 54-55, Jakarta 12190"
            ],
            'fullname' => [
                'en' => "Full Name",
                'id' => "Nama Lengkap"
            ],
            'subject' => [
                'en' => "Subject",
                'id' => "Subjek"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'phone' => [
                'en' => "Phone Number",
                'id' => "Nomor Telepon"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'message' => [
                'en' => "Message",
                'id' => "Pesan"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Submit",
                'id' => "Kirim"
            ],
            ],
        ];

        foreach ($home_email_investor as $data) {
            HomeEmailInvestor::create($data);
        }


        // HOME STARTUP FORM
        $portfolio_email_startup = [
            [
            'title' => [
                'en' => "Get Investment!",
                'id' => "Dapatkan Investasi!"
            ],
            'subtitle' => [
                'en' => "",
                'id' => ""
            ],
            'firstname' => [
                'en' => "First Name",
                'id' => "Nama Depan"
            ],
            'lastname' => [
                'en' => "Last Name",
                'id' => "Nama Belakang"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'phone' => [
                'en' => "Phone Number",
                'id' => "Nomor Telepon"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'website_url' => [
                'en' => "Add URL to your Company Website",
                'id' => "Tambahkan URL Situs Web Perusahaan Anda"
            ],
            'business_sector' => [
                'en' => "Choose your company's main business sector",
                'id' => "Pilih bisnis utama perusahaan Anda"
            ],
            'upload' => [
                'en' => "Upload Your Files",
                'id' => "Unggah File Anda"
            ],
            'instructions' => [
                'en' => "Your company profile or pitch deck should address these things:
<br/>The specific problem your company are aiming to tackle
<br/>The solution for the specific problem
<br/>The business model, describe the strategy to increase the revenue or profit with its products and customer base
<br/>The target market, the size, entry barriers, challenges, and opportunities
<br/>Number of the current users or clients that are using your products
<br/>Your competition and who might be one",
                'id' => "Profil perusahaan atau pitch deck Anda harus membahas hal-hal berikut:
<br/>Masalah spesifik yang ingin diatasi oleh perusahaan Anda
<br/>Solusi untuk masalah spesifik tersebut
<br/>Model bisnis, jelaskan strategi untuk meningkatkan pendapatan atau keuntungan dengan produk dan basis pelanggannya
<br/>Target pasar, ukuran, hambatan masuk, tantangan, dan peluang
<br/>Jumlah pengguna atau klien saat ini yang menggunakan produk Anda
<br/>Persaingan Anda dan siapa yang mungkin menjadi pesaing"
            ],
            'cancel' => [
                'en' => "Reset",
                'id' => "Ulangi"
            ],
            'submit' => [
                'en' => "Submit Pitch",
                'id' => "Kirim Pitch"
            ],
            ],
        ];

        foreach ($portfolio_email_startup as $data) {
            PortfolioEmailStartup::create($data);
        }


        // HOME INVESTOR FORM
        $portfolio_email_investor = [
            [
            'title' => [
                'en' => "New Investor Enquiry",
                'id' => "Permintaan Investor Baru"
            ],
            'subtitle' => [
                'en' => "Begin your investment journey with confidence—partner with us today.",
                'id' => "Mulai jalan cari investasi dengan kepercayaan—hubungi kami sekarang."
            ],
            'fullname' => [
                'en' => "Full Name",
                'id' => "Nama Lengkap"
            ],
            'subject' => [
                'en' => "Subject",
                'id' => "Subjek"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'phone' => [
                'en' => "Phone Number",
                'id' => "Nomor Telepon"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'message' => [
                'en' => "Message",
                'id' => "Pesan"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Submit",
                'id' => "Kirim"
            ],
            ],
        ];

        foreach ($portfolio_email_investor as $data) {
            PortfolioEmailInvestor::create($data);
        }


        // HOME INVESTOR FORM
        $contact_email = [
            [
            'title' => [
                'en' => "We are happy to discuss your business situation, please contact.",
                'id' => "Kami dengan senang hati akan mendiskusikan situasi bisnis Anda, silakan hubungi kami."
            ],
            'position1' => [
                'en' => "Startup",
                'id' => "Startup"
            ],
            'position2' => [
                'en' => "Investor",
                'id' => "Investor"
            ],
            'position3' => [
                'en' => "Media",
                'id' => "Media"
            ],
            'name' => [
                'en' => "Name",
                'id' => "Nama"
            ],
            'subject' => [
                'en' => "Subject",
                'id' => "Subjek"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'startup_category' => [
                'en' => "Startup Category",
                'id' => "Kategori Startup"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'message' => [
                'en' => "Message",
                'id' => "Pesan"
            ],
            'problem' => [
                'en' => "Whats the problem you are trying to solve?",
                'id' => "Apa masalah yang Anda coba selesaikan?"
            ],
            'solution' => [
                'en' => "How are you going to solve the problem?",
                'id' => "Bagaimana Anda akan menyelesaikan masalah tersebut?"
            ],
            'proposition' => [
                'en' => "What's your value proposition?",
                'id' => "Apa proposisi nilai Anda?"
            ],

            'upload' => [
                'en' => "Upload Your Files",
                'id' => "Unggah File Anda"
            ],
            'instructions' => [
                'en' => "Your company profile or pitch deck should address these things:
<br/>The specific problem your company are aiming to tackle
<br/>The solution for the specific problem
<br/>The business model, describe the strategy to increase the revenue or profit with its products and customer base
<br/>The target market, the size, entry barriers, challenges, and opportunities
<br/>Number of the current users or clients that are using your products
<br/>Your competition and who might be one",
                'id' => "Profil perusahaan atau pitch deck Anda harus membahas hal-hal berikut:
<br/>Masalah spesifik yang ingin diatasi oleh perusahaan Anda
<br/>Solusi untuk masalah spesifik tersebut
<br/>Model bisnis, jelaskan strategi untuk meningkatkan pendapatan atau keuntungan dengan produk dan basis pelanggannya
<br/>Target pasar, ukuran, hambatan masuk, tantangan, dan peluang
<br/>Jumlah pengguna atau klien saat ini yang menggunakan produk Anda
<br/>Persaingan Anda dan siapa yang mungkin menjadi pesaing"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Submit",
                'id' => "Kirim"
            ],
            ],
        ];

        foreach ($contact_email as $data) {
            ContactEmail::create($data);
        }


        $publication_email = [
            [
            'title' => [
                'en' => "Please fill in your contact data to request our report",
                'id' => "Silakan isi data kontak Anda untuk meminta laporan kami"
            ],
            'name' => [
                'en' => "Name",
                'id' => "Nama"
            ],
            'email' => [
                'en' => "Email",
                'id' => "Alamat Email"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'job' => [
                'en' => "Job Position",
                'id' => "Jabatan"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Request Report",
                'id' => "Minta Laporan"
            ],
            'image_url' => "",
            ],
        ];

        foreach ($publication_email as $data) {
            PublicationEmail::create($data);
        }


        // HOME STARTUP FORM
        $platform_email = [
            [
            'title' => [
                'en' => "Synergize with Us",
                'id' => "Synergize dengan Kami"
            ],
            'subtitle' => [
                'en' => "",
                'id' => ""
            ],
            'program' => [
                'en' => "Program",
                'id' => "Program"
            ],
            'mandiri_ecosystem' => [
                'en' => "Mandiri Ecosystem",
                'id' => "Ekosistem Mandiri"
            ],
            'firstname' => [
                'en' => "First Name",
                'id' => "Nama Depan"
            ],
            'lastname' => [
                'en' => "Last Name",
                'id' => "Nama Belakang"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'phone' => [
                'en' => "Phone Number",
                'id' => "Nomor Telepon"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'website_url' => [
                'en' => "Add URL to your Company Website",
                'id' => "Tambahkan URL Situs Web Perusahaan Anda"
            ],
            'business_sector' => [
                'en' => "Choose your company's main business sector",
                'id' => "Pilih bisnis utama perusahaan Anda"
            ],
            'upload' => [
                'en' => "Upload Your Files",
                'id' => "Unggah File Anda"
            ],
            'instructions' => [
                'en' => "Your company profile or pitch deck should address these things:
<br/>The specific problem your company are aiming to tackle
<br/>The solution for the specific problem
<br/>The business model, describe the strategy to increase the revenue or profit with its products and customer base
<br/>The target market, the size, entry barriers, challenges, and opportunities
<br/>Number of the current users or clients that are using your products
<br/>Your competition and who might be one",
                'id' => "Profil perusahaan atau pitch deck Anda harus membahas hal-hal berikut:
<br/>Masalah spesifik yang ingin diatasi oleh perusahaan Anda
<br/>Solusi untuk masalah spesifik tersebut
<br/>Model bisnis, jelaskan strategi untuk meningkatkan pendapatan atau keuntungan dengan produk dan basis pelanggannya
<br/>Target pasar, ukuran, hambatan masuk, tantangan, dan peluang
<br/>Jumlah pengguna atau klien saat ini yang menggunakan produk Anda
<br/>Persaingan Anda dan siapa yang mungkin menjadi pesaing"
            ],
            'cancel' => [
                'en' => "Reset",
                'id' => "Ulangi"
            ],
            'submit' => [
                'en' => "Submit Pitch",
                'id' => "Kirim Pitch"
            ],
            ],
        ];

        foreach ($platform_email as $data) {
            PlatformEmail::create($data);
        }


        // HOME STARTUP FORM
        $platform_email_zenith = [
            [
            'title' => [
                'en' => "Registration",
                'id' => "Pendaftaran"
            ],
            'headline1' => [
                'en' => "Company Information",
                'id' => "Informasi Perusahaan"
            ],
            'email' => [
                'en' => "Email Address",
                'id' => "Alamat Email"
            ],
            'company' => [
                'en' => "Company Name",
                'id' => "Nama Perusahaan"
            ],
            'website_url' => [
                'en' => "Company Website",
                'id' => "Situs Web Perusahaan"
            ],
            'fullname' => [
                'en' => "Fullname",
                'id' => "Nama Lengkap"
            ],
            'linkedin' => [
                'en' => "Linkedin Url",
                'id' => "URL LinkedIn"
            ],
            'whatsapp' => [
                'en' => "Whatsapp Number",
                'id' => "Nomor WhatsApp"
            ],
            'headline2' => [
                'en' => "Application Background",
                'id' => "Latar Belakang Aplikasi"
            ],
            'which_zenith' => [
                'en' => "Which Zenith focus Industry do you apply for?",
                'id' => "Industri fokus Zenith mana yang Anda lamar?"
            ],
            'which_sector' => [
                'en' => "What is the main business sector of your company?",
                'id' => "Apa sektor bisnis utama perusahaan Anda?"
            ],
            'description' => [
                'en' => "Which of the following best describes the current status of your business?*",
                'id' => "Manakah dari berikut ini yang paling menggambarkan status bisnis Anda saat ini?*"
            ],
            'revenue' => [
                'en' => "What is your current annual revenue range?*",
                'id' => "Berapa kisaran pendapatan tahunan Anda saat ini?*"
            ],
            'established' => [
                'en' => "How long has your company been operating?*",
                'id' => "Sudah berapa lama perusahaan Anda beroperasi?*"
            ],
            'employee' => [
                'en' => "How many employees do you have?*",
                'id' => "Berapa jumlah karyawan yang Anda miliki?*"
            ],
            'is_indonesian' => [
                'en' => "Is your company established in Indonesia?*",
                'id' => "Apakah perusahaan Anda didirikan di Indonesia?*"
            ],
            'cancel' => [
                'en' => "Cancel",
                'id' => "Batal"
            ],
            'submit' => [
                'en' => "Submit",
                'id' => "Kirim"
            ]
            ]
        ];

        foreach ($platform_email_zenith as $data) {
            PlatformEmailZenith::create($data);
        }


    }
}
