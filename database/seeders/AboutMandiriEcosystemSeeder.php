<?php

namespace Database\Seeders;

use App\Models\AboutMandiriEcosystem;
use App\Models\AboutMandiriEcosystemCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AboutMandiriEcosystemSeeder extends Seeder
{
    public function run(): void
    {

        $categories = [
            [
                'name' => [
                    'en' => 'Bank',
                    'id' => 'Bank'
                ],
                'order' => 1,
            ],
            [
                'name' => [
                    'en' => 'Investment',
                    'id' => 'Investasi'
                ],
                'order' => 2,
            ],
            [
                'name' => [
                    'en' => 'Multi-Finance',
                    'id' => 'Multi-Keuangan'
                ],
                'order' => 3,
            ],
            [
                'name' => [
                    'en' => 'Remittance',
                    'id' => 'Pengiriman Uang'
                ],
                'order' => 4,
            ],
            [
                'name' => [
                    'en' => 'Insurance',
                    'id' => 'Asuransi'
                ],
                'order' => 5,
            ],
        ];

        foreach ($categories as $data) {
            AboutMandiriEcosystemCategory::create($data);
        }


        $datas = [
            [
                'title' => [
                    'en' => 'The Biggest Conglomerate with Various Subsidiaries.',
                    'id' => 'Konglomerat Terbesar dengan Berbagai Anak Perusahaan.'
                ],
                'slug' => 'bank-mandiri',
                'content' => [
                    'en' => "Mandiri’s total asset amount to Rp. 2.427 Tn a of Q4 2024, Mandiri has 42+ Mn retail customers and 200k+ SMEs, 137 Branch offices, 12k+ ATM, 7 overseas branch offices which includes Singapore, Hong Kong, Shanghai, Cayman Islands, Dili, London, and Malaysia.",
                    'id' => "Aset total Mandiri sebesar Rp. 2.427 Tn pada Q4 2024, Mandiri memiliki 42+ juta nasabah ritel dan 200k+ UKM, 137 kantor cabang, 12k+ ATM, 7 kantor cabang luar negeri yang mencakup Singapura, Hong Kong, Shanghai, Kepulauan Cayman, Dili, London, dan Malaysia."
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JKGJBVAF771KHRDCGG5M142P.png',
                'is_domestic' => true,
                'is_international' => true,
                'is_headline' => true,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '',
                    'id' => ''
                ],
                'hover_content' => [
                    'en' => "",
                    'id' => ""
                ],
                'about_ecosystem_category_id' => 1
            ],
            [
                'title' => [
                    'en' => 'The Most Outstanding Bank Syariah',
                    'id' => 'Bank Syariah Terbaik'
                ],
                'slug' => 'bank-syariah-indonesia',
                'content' => [
                    'en' => "Provides a full range of Syariah-compliant services, including retail banking, corporate financing, wealth management, and trade finance.",
                    'id' => "Menyediakan berbagai layanan yang sesuai dengan Syariah, termasuk perbankan ritel, pembiayaan korporasi, manajemen kekayaan, dan pembiayaan perdagangan."
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTS5N5K8AHECTBRKX10FE1.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                    'id' => '<p>Startup yang menawarkan teknologi keuangan Syariah, solusi perbankan digital, alat manajemen kekayaan Islam, atau sistem pembiayaan perdagangan.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3>2. Technological Innovation</h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3. Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>",
                    'id' => "<h3>1. Keselarasan dengan Prinsip Syariah</h3><p>Kepatuhan terhadap regulasi keuangan Islam dan standar etika.&nbsp;</p><h3>2. Inovasi Teknologi</h3><p>Penggunaan AI, blockchain, atau big data untuk meningkatkan layanan perbankan Islam dan pengalaman pelanggan.&nbsp;</p><h3>3. Potensi Pasar</h3><p>Model bisnis yang dapat diskalakan yang menargetkan sektor keuangan Islam secara lokal dan internasional.&nbsp;</p><h3>4. Kesiapan Sinergi</h3><p>Kemampuan berintegrasi dengan ekosistem BSI, termasuk layanan perbankan ritel dan korporasi.</p><h3>5. Komitmen ESG</h3><p>Mempromosikan keuangan yang etis dan berkelanjutan yang selaras dengan nilai-nilai Syariah.</p>"
                ],
                'about_ecosystem_category_id' => 1
            ],
            [

                'title' => [
                    'en' => 'Pension Fund Management Services',
                    'id' => 'Layanan Manajemen Dana Pensiun'
                ],
                'slug' => 'mandiri-taspen',
                'content' => [
                    'en' => 'Specializes in pension fund management, offering financial products and services to ensure the well-being of retirees in Indonesia. It operates a wide network of branches across the country.',
                    'id' => 'Berkhusus dalam manajemen dana pensiun, menawarkan produk dan layanan keuangan untuk memastikan kesejahteraan pensiunan di Indonesia. Mereka memiliki jaringan kantor cabang yang luas di seluruh negeri.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTNVPKQD0N621GGTY5R0C.png',
                'is_domestic' => true,
                'is_international' => false,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups specializing in pension-tech, retirement planning, financial literacy platforms, or insurance solutions tailored for retirees.</p>',
                    'id' => '<p>Startup yang berfokus pada teknologi pensiun, perencanaan pensiun, platform literasi keuangan, atau solusi asuransi yang dirancang khusus untuk pensiunan.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Retirement-Centric Solutions</h3><p>Products or platforms that address financial security and well-being for retirees.</p><h3>2. User-Friendly Technology</h3><p>Intuitive tools enhancing retiree financial literacy and access to savings and investments.</p><h3>3. Scalability and Reach</h3><p>Potential to expand services across Indonesia's diverse retiree demographic.</p><h3>4. Compliance and Governance</h3><p>Adherence to pension fund regulations and financial industry standards.</p><h3>5. Synergy Readiness</h3><p>Willingness to collaborate with Mandiri Taspen's network to deliver tailored solutions.</p>",
                    'id' => "<h3>1. Solusi Berbasis Pensiun</h3><p>Produk atau platform yang menangani keamanan dan kesejahteraan keuangan bagi pensiunan.</p><h3>2. Teknologi Ramah Pengguna</h3><p>Alat intuitif yang meningkatkan literasi keuangan pensiunan dan akses ke tabungan dan investasi.</p><h3>3. Skalabilitas dan Jangkauan</h3><p>Potensi untuk memperluas layanan di seluruh demografi pensiunan yang beragam di Indonesia.</p><h3>4. Kepatuhan dan Tata Kelola</h3><p>Kepatuhan terhadap regulasi dana pensiun dan standar industri keuangan.</p><h3>5. Kesiapan Sinergi</h3><p>Kemauan untuk berkolaborasi dengan jaringan Mandiri Taspen untuk memberikan solusi yang dirancang khusus.</p>"
                ],
                'about_ecosystem_category_id' => 1
            ],

            [
                'title' => [
                    'en' => 'Bank Mandiri’s Subsidiary Headquartered in London',
                    'id' => 'Anak Perusahaan Bank Mandiri yang Berkantor Pusat di London'
                ],
                'slug' => 'mandiri-europe',
                'content' => [
                    'en' => 'Focuses on trade finance, treasury management, and corporate banking, supporting Indonesian businesses in Europe.',
                    'id' => 'Berfokus pada pembiayaan perdagangan, manajemen treasury, dan perbankan korporasi, mendukung bisnis Indonesia di Eropa.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2Y6PHQP9HSJRK97AHXZCEM.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups focused on trade finance, cross-border payment systems, treasury management, or solutions that support international business operations.</p>',
                    'id' => '<p>Startup yang berfokus pada pembiayaan perdagangan, sistem pembayaran lintas batas, manajemen treasury, atau solusi yang mendukung operasi bisnis internasional.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Cross-Border Solutions</h3><p>Technologies that simplify trade finance, currency management, and international payments.</p><h3>2. Corporate Banking Support</h3><p>Tools for treasury optimization and business expansion across Europe and Indonesia.</p><h3>3. Regulatory Compliance</h3><p>Adherence to international banking regulations and standards.</p><h3>4. Market Scalability</h3><p>Solutions with potential to expand beyond initial markets, benefiting businesses in Europe and Indonesia.</p><h3>5. Synergy Readiness</h3><p>Capability to integrate with Mandiri Europe's banking services and facilitate cross-border trade.</p><h3>6. Sustainability Focus</h3><p>Supporting ESG initiatives in trade and investment practices.</p>",
                    'id' => "<h3>1. Solusi Lintas Batas</h3><p>Teknologi yang menyederhanakan pembiayaan perdagangan, manajemen mata uang, dan pembayaran internasional.</p><h3>2. Dukungan Perbankan Korporasi</h3><p>Alat untuk optimalisasi treasury dan ekspansi bisnis di Eropa dan Indonesia.</p><h3>3. Kepatuhan Regulasi</h3><p>Kepatuhan terhadap regulasi dan standar perbankan internasional.</p><h3>4. Skalabilitas Pasar</h3><p>Solusi dengan potensi ekspansi melampaui pasar awal, menguntungkan bisnis di Eropa dan Indonesia.</p><h3>5. Kesiapan Sinergi</h3><p>Kemampuan berintegrasi dengan layanan perbankan Mandiri Europe dan memfasilitasi perdagangan lintas batas.</p><h3>6. Fokus Keberlanjutan</h3><p>Mendukung inisiatif ESG dalam praktik perdagangan dan investasi.</p>"
                ],
                'about_ecosystem_category_id' => 1
            ],
            [
                'title' => [
                    'en' => 'Best Investment Bank in Indonesia',
                    'id' => 'Bank Investasi Terbaik di Indonesia'
                ],
                'slug' => 'mandiri-sekuritas',
                'content' => [
                    'en' => 'Provides securities brokerage, underwriting, and financial advisory services, with a regional branch in Singapore.',
                    'id' => 'Menyediakan layanan broker sekuritas, penjaminan emisi, dan konsultasi keuangan, dengan cabang regional di Singapura.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTZYZM9YBGCASSBMDGTJP.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups that enhance investment banking operations, including securities trading, underwriting, financial advisory, or market intelligence.</p>',
                    'id' => '<p>Startup yang meningkatkan operasi perbankan investasi, termasuk perdagangan sekuritas, penjaminan emisi, konsultasi keuangan, atau intelijen pasar.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Advanced Trading Platforms</h3><p>Solutions for efficient and secure securities brokerage.</p><h3>2. Underwriting Support</h3><p>Technologies that streamline the underwriting process for IPOs or bond issuance.</p><h3>3. Financial Analytics Tools</h3><p>Platforms offering advanced data insights for market analysis and investment strategies.</p><h3>4. Regulatory Compliance</h3><p>Startups with systems that meet financial industry regulations, ensuring secure operations.</p><h3>5. Scalability</h3><p>Solutions that can integrate seamlessly across Mandiri Sekuritas' domestic and regional markets.</p>",
                    'id' => "<h3>1. Platform Perdagangan Canggih</h3><p>Solusi untuk perdagangan sekuritas yang efisien dan aman.</p><h3>2. Dukungan Penjaminan Emisi</h3><p>Teknologi yang menyederhanakan proses penjaminan emisi untuk IPO atau penerbitan obligasi.</p><h3>3. Alat Analitik Keuangan</h3><p>Platform yang menawarkan wawasan data lanjutan untuk analisis pasar dan strategi investasi.</p><h3>4. Kepatuhan Regulasi</h3><p>Startup dengan sistem yang memenuhi regulasi industri keuangan, memastikan operasi yang aman.</p><h3>5. Skalabilitas</h3><p>Solusi yang dapat berintegrasi dengan lancar di pasar domestik dan regional Mandiri Sekuritas.</p>"
                ],
                'about_ecosystem_category_id' => 2
            ],

            [
                'title' => [
                    'en' => 'Leading Management Asset in Indonesia',
                    'id' => 'Manajemen Aset Terkemuka di Indonesia'
                ],
                'slug' => 'mandiri-investasi',
                'content' => [
                    'en' => 'Offers innovative investment products like mutual funds and discretionary funds, tailored to diverse financial goals.',
                    'id' => 'Menawarkan produk investasi inovatif seperti reksa dana dan dana kelolaan, disesuaikan dengan berbagai tujuan keuangan.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2Y7HX7CQ95J5APVBH500QY.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups specializing in portfolio management, innovative investment tools, or client-focused financial planning platforms.</p>',
                    'id' => '<p>Startup yang mengkhususkan diri dalam manajemen portofolio, alat investasi inovatif, atau platform perencanaan keuangan yang berfokus pada klien.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Portfolio Optimization</h3><p>Tools to enhance asset allocation and investment performance.</p><h3>2. Client-Focused Solutions</h3><p>Platforms that simplify investment planning and engagement for diverse client needs.</p><h3>3. Technological Innovation</h3><p>Use of AI, machine learning, or big data to create smarter investment products.</p><h3>4. Compliance and Risk Management</h3><p>Systems that ensure adherence to regulations while managing risk effectively.</p><h3>5. Sustainability-Focused Investments</h3><p>Startups supporting ESG-aligned investment strategies or impact-driven financial products.</p>",
                    'id' => "<h3>1. Optimasi Portofolio</h3><p>Alat untuk meningkatkan alokasi aset dan kinerja investasi.</p><h3>2. Solusi Berfokus pada Klien</h3><p>Platform yang menyederhanakan perencanaan investasi dan keterlibatan untuk berbagai kebutuhan klien.</p><h3>3. Inovasi Teknologi</h3><p>Penggunaan AI, machine learning, atau big data untuk menciptakan produk investasi yang lebih cerdas.</p><h3>4. Kepatuhan dan Manajemen Risiko</h3><p>Sistem yang memastikan kepatuhan terhadap regulasi sambil mengelola risiko secara efektif.</p><h3>5. Investasi Berfokus pada Keberlanjutan</h3><p>Startup yang mendukung strategi investasi berbasis ESG atau produk keuangan berbasis dampak.</p>"
                ],
                'about_ecosystem_category_id' => 2
            ],
            [
                'title' => [
                    'en' => 'Financing Automotive Sector (New and Fleet)',
                    'id' => 'Pembiayaan Sektor Otomotif (Baru dan Armada)'
                ],
                'slug' => 'mandiri-tunas-finance',
                'content' => [
                    'en' => 'Offers financing for new and pre-owned vehicles, fleet solutions, and multipurpose loans through a nationwide network.',
                    'id' => 'Menawarkan pembiayaan untuk kendaraan baru dan bekas, solusi armada, dan pinjaman multiguna melalui jaringan nasional.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTW3ADGR8FY1WEQ2ETE1HV.png',
                'is_domestic' => true,
                'is_international' => false,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups that enhance automotive financing, vehicle loan solutions, fleet management, or multipurpose financial services.</p>',
                    'id' => '<p>Startup yang meningkatkan pembiayaan otomotif, solusi pinjaman kendaraan, manajemen armada, atau layanan keuangan multiguna.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Automotive Financing Solutions</h3><p>Technologies for efficient loan processing and risk assessment in the automotive sector.</p><h3>2. Fleet Management Tools</h3><p>Platforms that streamline fleet financing and management for businesses.</p><h3>3. Loan Customization</h3><p>Startups offering personalized or flexible financing options for individuals and businesses.</p><h3>4. Scalability</h3><p>Solutions that can expand nationwide, integrating seamlessly with Mandiri Tunas Finance's network.</p><h3>5. User-Friendly Experience</h3><p>Platforms that simplify the customer journey, from application to loan approval.</p>",
                    'id' => "<h3>1. Solusi Pembiayaan Otomotif</h3><p>Teknologi untuk pemrosesan pinjaman dan penilaian risiko yang efisien di sektor otomotif.</p><h3>2. Alat Manajemen Armada</h3><p>Platform yang mengefisienkan pembiayaan dan pengelolaan armada untuk bisnis.</p><h3>3. Kustomisasi Pinjaman</h3><p>Startup yang menawarkan opsi pembiayaan yang personal atau fleksibel untuk individu dan bisnis.</p><h3>4. Skalabilitas</h3><p>Solusi yang dapat berkembang secara nasional, terintegrasi dengan jaringan Mandiri Tunas Finance.</p><h3>5. Pengalaman Ramah Pengguna</h3><p>Platform yang menyederhanakan perjalanan pelanggan, dari aplikasi hingga persetujuan pinjaman.</p>"
                ],
                'about_ecosystem_category_id' => 3
            ],
            [
                'title' => [
                    'en' => 'Financing Solutions for Used Automotive',
                    'id' => 'Solusi Pembiayaan untuk Otomotif Bekas'
                ],
                'slug' => 'mandiri-utama-finance',
                'content' => [
                    'en' => 'Provides financing solutions for the purchase of pre-owned vehicles for individuals and businesses.',
                    'id' => 'Menyediakan solusi pembiayaan untuk pembelian kendaraan bekas untuk individu dan bisnis.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTWDRP4W79YFMG8CHV5F9S.png',
                'is_domestic' => true,
                'is_international' => false,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups that focus on financing for pre-owned vehicles, credit scoring, or solutions tailored to the used car market.</p>',
                    'id' => '<p>Startup yang berfokus pada pembiayaan untuk kendaraan bekas, skor kredit, atau solusi yang dirancang khusus untuk pasar mobil bekas.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Pre-Owned Vehicle Financing</h3><p>Platforms that offer tailored loan products for used automotive buyers.</p><h3>2. Credit Scoring and Risk Management</h3><p>Tools that improve credit assessment and reduce risk in used vehicle loans.</p><h3>3. Flexible Financing Options</h3><p>Solutions that cater to both individual buyers and businesses in the second-hand vehicle market.</p><h3>4. Market Penetration</h3><p>Tools that enhance access to financing in the domestic used car sector.</p><h3>5. Seamless Integration</h3><p>Solutions that integrate with existing Mandiri Utama Finance processes for faster loan approvals.</p>",
                    'id' => "<h3>1. Pembiayaan Kendaraan Bekas</h3><p>Platform yang menawarkan produk pinjaman yang dirancang khusus untuk pembeli otomotif bekas.</p><h3>2. Skor Kredit dan Manajemen Risiko</h3><p>Alat yang meningkatkan penilaian kredit dan mengurangi risiko dalam pinjaman kendaraan bekas.</p><h3>3. Opsi Pembiayaan Fleksibel</h3><p>Solusi yang memenuhi kebutuhan baik pembeli individu maupun bisnis di pasar mobil bekas.</p><h3>4. Penetrasi Pasar</h3><p>Alat yang meningkatkan akses ke pembiayaan di sektor mobil bekas domestik.</p><h3>5. Integrasi Lancar</h3><p>Solusi yang berintegrasi dengan proses Mandiri Utama Finance yang ada untuk persetujuan pinjaman yang lebih cepat.</p>"
                ],
                'about_ecosystem_category_id' => 3
            ],
            [
                'title' => [
                    'en' => 'Cross-Border Remittance Services',
                    'id' => 'Layanan Pengiriman Uang Lintas Batas'
                ],
                'slug' => 'mandiri-remittance',
                'content' => [
                    'en' => 'Offers efficient and reliable international money transfer services for diverse transaction needs.',
                    'id' => 'Menawarkan layanan pengiriman uang internasional yang efisien dan dapat diandalkan untuk berbagai kebutuhan transaksi.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYKEBH2BN0T93NXZG6W99.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups that provide solutions for international money transfers, remittance platforms, payment processing, or financial technologies for cross-border transactions.</p>',
                    'id' => '<p>Startup yang menyediakan solusi untuk pengiriman uang internasional, platform pengiriman, pengolahan pembayaran, atau teknologi keuangan untuk transaksi lintas batas.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Cross-Border Payment Solutions</h3><p>Technologies that enable seamless, secure, and efficient international money transfers.</p><h3>2. Transaction Speed and Reliability</h3><p>Platforms that optimize remittance speed while ensuring reliable service for users.</p><h3>3. Regulatory Compliance</h3><p>Solutions that meet international financial regulations and ensure secure transfers.</p><h3>4. Scalability</h3><p>Startups with solutions that can easily expand across different regions and integrate with global financial networks.</p><h3>5. User Experience</h3><p>Platforms that prioritize easy-to-use interfaces for both senders and receivers, simplifying the remittance process.</p>",
                    'id' => "<h3>1. Solusi Pembayaran Lintas Batas</h3><p>Teknologi yang memungkinkan pengiriman uang internasional yang lancar, aman, dan efisien.</p><h3>2. Kecepatan dan Keandalan Transaksi</h3><p>Platform yang mengoptimalkan kecepatan pengiriman sambil memastikan layanan yang dapat diandalkan bagi pengguna.</p><h3>3. Kepatuhan Regulasi</h3><p>Solusi yang memenuhi regulasi keuangan internasional dan memastikan transfer yang aman.</p><h3>4. Skalabilitas</h3><p>Startup dengan solusi yang dapat dengan mudah berkembang di berbagai wilayah dan berintegrasi dengan jaringan keuangan global.</p><h3>5. Pengalaman Pengguna</h3><p>Platform yang memprioritaskan antarmuka yang mudah digunakan bagi pengirim dan penerima, menyederhanakan proses pengiriman.</p>"
                ],
                'about_ecosystem_category_id' => 4
            ],
            [
                'title' => [
                    'en' => 'Expansion Into Insurance Sector',
                    'id' => 'Ekspansi ke Sektor Asuransi'
                ],
                'slug' => 'axa-mandiri',
                'content' => [
                    'en' => 'Provides life, health, and financial protection insurance products, tailored to individual and corporate needs.',
                    'id' => 'Menyediakan produk asuransi perlindungan jiwa, kesehatan, dan keuangan, disesuaikan dengan kebutuhan individu dan korporasi.'
                ],
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYZK8F3K03EZ16098AAAD.png',
                'is_domestic' => false,
                'is_international' => true,
                'is_headline' => false,
                'created_at' => now(),
                'hover_focus_area' => [
                    'en' => '<p>Startups that offer solutions for life insurance, health insurance, financial protection, or technology-driven insurance products and services.</p>',
                    'id' => '<p>Startup yang menawarkan solusi untuk asuransi jiwa, asuransi kesehatan, perlindungan keuangan, atau produk dan layanan asuransi yang didorong oleh teknologi.</p>'
                ],
                'hover_content' => [
                    'en' => "<h3>1. Insurance Product Innovation</h3><p>Solutions that develop new life, health, or financial protection products to meet evolving customer needs.</p><h3>2. Digital Insurance Platforms</h3><p>Technologies that streamline insurance processes, including policy management, claims, and customer service.</p><h3>3. Personalization</h3><p>Tools that allow for tailored insurance coverage, catering to both individual and corporate needs.</p><h3>4. Regulatory Compliance</h3><p>Platforms that ensure adherence to local and international insurance regulations.</p><h3>5. User Experience</h3><p>Solutions that simplify the customer journey from policy purchase to claims, making it user-friendly and accessible.</p>",
                    'id' => "<h3>1. Inovasi Produk Asuransi</h3><p>Solusi yang mengembangkan produk asuransi jiwa, kesehatan, atau perlindungan keuangan baru untuk memenuhi kebutuhan pelanggan yang berkembang.</p><h3>2. Platform Asuransi Digital</h3><p>Teknologi yang menyederhanakan proses asuransi, termasuk manajemen kebijakan, klaim, dan layanan pelanggan.</p><h3>3. Personalisasi</h3><p>Alat yang memungkinkan perlindungan asuransi yang disesuaikan, memenuhi kebutuhan baik individu maupun korporasi.</p><h3>4. Kepatuhan Regulasi</h3><p>Platform yang memastikan kepatuhan terhadap regulasi asuransi lokal dan internasional.</p><h3>5. Pengalaman Pengguna</h3><p>Solusi yang menyederhanakan perjalanan pelanggan dari pembelian kebijakan hingga klaim, membuatnya ramah pengguna dan mudah diakses.</p>"
                ],
                'about_ecosystem_category_id' => 5
            ],

        ];

        foreach ($datas as $data) {
            AboutMandiriEcosystem::create($data);
        }
    }
}
