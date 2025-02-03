<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        // Create sample categories
        $categories = [
            [
                'name' => 'News',
                'slug' => 'news',
            ],
            [
                'name' => 'Podcast',
                'slug' => 'podcast',
            ],
            [
                'name' => 'Blog',
                'slug' => 'blog',
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }

        // Create sample tags
        $tags = [
            [
                'name' => 'Venture Capital',
                'slug' => 'venture-capital',
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
            ],
            [
                'name' => 'Startups',
                'slug' => 'startups',
            ],
            [
                'name' => 'Fintech',
                'slug' => 'fintech',
            ],
            [
                'name' => 'Digital Innovation',
                'slug' => 'digital-innovation',
            ],
            [
                'name' => 'Investment Strategy',
                'slug' => 'investment-strategy',
            ],
        ];

        foreach ($tags as $tag) {
            BlogTag::updateOrCreate(
                ['slug' => $tag['slug']],
                $tag
            );
        }

        // Get or create the first user if needed
        $user = User::firstOrCreate(
            ['email' => 'nandha@nandha.com'],
            [
                'name' => 'nandha',
                'password' => Hash::make('nandha'),
            ]
        );

        // Create sample blog posts
        $posts = [
            [
                'title' => 'Mandiri Capital Indonesia (MCI) Joins Money 20/20 Asia 2024, Get Schedule & Activities -
Event|News Main',
                'content_heading' => 'Venture capital plays a pivotal role in innovation and growth, and Mandiri Capital Indonesia
(MCI) is at the forefront. MCI, the venture arm of Bank Mandiri, supports technology
companies’ development and assists startups in Asia with growth and disruption.
"MCI’s presence at Money 20/20 Asia is a pivotal moment in our journey towards global
outreach,
" said Dennis Pratistha, Chief Investment Officer at Mandiri Capital Indonesia. He
further noted that “this event is not just an activity, but a strategic move to integrate vibrant
startups and enterprises with our robust network, providing unparalleled access to resources
and fostering mutual growth.
"',
                'content' => '
The Xponent program is set to highlight MCI\'s commitment, helping startups to network and
potentially collaborate with Mandiri Group\'s larger ecosystem, demonstrating MCI\'s active
investment in the growth of these companies.
&nbsp;
<h2>Event Details</h2>
Bangkok, Thailand, will host Money 20/20 Asia from April 23 to 25, 2024, drawing
entrepreneurs, financial institutions, tech innovators, and investors from across the world.
Embrace the exclusive benefits and comfort at the MCI lounge, designed to offer:
<ul>
<li><strong>Networking Opportunities: </strong>A space to meet and connect with
leaders in the industry, broadening your professional circle.
</li>
<li><strong>Insights and Expertise:</strong> Direct access to knowledge from
experts on evolving trends and innovative advances.
</li>
<li><strong>Unlocking Business Synergy:</strong> Explore new horizons of
innovation &amp; collaboration with Mandiri Group at Money 20 / 20 Asia in Bangkok.
</li>
</ul>
MCI will be a key participant, offering a suite of activities:
<h3><u>Day 1 - April 23, 2024</u></h3>
<ul>
<li>09:30 - 10:00: Opening Ceremony - Mini Stage</li>
<li>10:00 - 10:30: Xponent by MCI for Startups &amp; Mandiri Group - Xponent
Area</li>
<li>11:00 - 11:20: Finding the Equilibrium: Navigating Corporate Venture Capital for
Public Benefit - Mini Stage</li>
<li>11:30 - 15:00: Xponent by MCI for Startups &amp; Mandiri Group - Xponent
Area</li>
<li>14:00 - 15:00: Speed Dating with MCI Investment team - Lounge Area</li>
<li>15:00 - 15:30: Drive the Global Frontier of Open Banking (Ayoconnect) - Mini
Stage</li>
</ul>
<ul>
<h3><u>Day 2 - April 24, 2024</u></h3>
<li>10:30 - 13:30: Xponent by MCI for Startups &amp; Mandiri Group - Xponent
Area</li>
<li>11:30 - 13:45: Zenith\'s Graduates: Catalyzing Innovation Through Strategic Bank
Synergy (AI Rudder - Mini Stage)</li>
<li>13:30 - 15:00: Xponent by MCI for Startups &amp; Mandiri Group - Xponent
Area</li>
<li>14:00 - 15:00: Speed Dating with MCI Investment team - Lounge Area</li>
<li>15:00 - 15:30: Global Ambition: Embarking Path from Local Startup to Global
Enterprise (Delos, iSeller, Kecilin, Mekari) - Mini Stage</li>
</ul>
<ul>
<h3><u>Day 3 - April 25, 2024</u></h3>
<li>10:30 - 11:00: Zenith\'s Graduates: Catalyzing Innovation Through Strategic Bank
Synergy (Fishlog, Imajin) - Mini Stage</li>
<li>11:30 - 12:00: Pioneering Path in Global P2P Lending: MSME Lending’s Current
Challenges and Strategies (KoinWorks) - Mini Stage</li>
<li>14:00 - 15:00: Speed Dating with MCI Investment team - Lounge Area</li>
</ul>
&nbsp;
MCI’s lounge, located next to the connections lounge, and will be a central point for product
showcases, in-depth discussions, and networking opportunities.
In addition to booth activities, MCI’s experts will join panels and discussions, delving into
fintech investment strategies and innovative financial solutions. Speed dating sessions will
be a highlight, allowing startups to pitch directly to MCI’s investment team.
<h2>Connect with MCI\'s Startups at Money 20/20 Asia</h2>
Money 20/20 Asia 2024 offers a chance to engage with Mandiri Capital Indonesia (MCI) and
draw on their technology companies investment expertise. Speakers from MCI\'s portfolio will
share insights on advancing fintech services and products.
&nbsp;
<ol>
<li><a href="https://www.ayoconnect.com/"><strong>Ayoconnect</strong></a> - A
leading open finance platform in Indonesia, providing seamless API integrations for financial
services across various sectors.
</li>
<li><a
href="https://koinworks.com/"><strong>KoinWorks</strong></a><strong>:</strong> As
Indonesia\'s leading peer-to-peer lending platform, KoinWorks synergizes smart technology
and financial innovation to empower businesses and personal finance.
</li>
<li><a href="https://fishlog.co.id/en"><strong>Fishlog</strong></a>: By utilizing
technology, Fishlog streamlines the seafood supply chain to enhance freshness and
affordability.
</li>
<li><a href="https://imajin.id/"><strong>Imajin</strong></a><strong>: </strong>This
platform redefines themanufacturing experience, focusing on quality and user
convenience.
</li>
<li><a href="https://mekari.com/en/"><strong>Mekari: </strong></a>A prominent
provider of accounting software in Indonesia, streamlining financial operations for
businesses with comprehensive, real-time solutions.
</li>
<li><a href="https://www.airudder.com/"><strong>AI Rudder</strong></a><strong>:
</strong>AI Rudder uses artificial intelligence to automate and enhance customer
communications for businesses.
</li>
<li><a
href="https://delosaqua.com/"><strong>Delos</strong></a><strong>:</strong> Integrating
technology into aquaculture, Delos aims to boost shrimp farming efficiency.
</li>
<li><a
href="https://www.isellercommerce.com/"><strong>iSeller</strong></a><strong>:</strong>
iSeller develops omnichannel sales platforms, blending commerce and technology for
retailers and restaurants.
</li>
<li><a href="https://kecilin.id/"><strong>Kecilin</strong></a><strong>:</strong>
Specializing in data compression, Kecilin innovates to make digital storage and transmission
more effective.
</li>
</ol>
&nbsp;
We encourage fintech professionals and tech enthusiasts to engage with the MCI team at
their booth, explore new opportunities, and immerse themselves in the event. For more
information and to register, visit <a
href="https://bit.ly/XponentMoney2020">https://bit.ly/XponentMoney2020</a>
. Be part of this
pivotal experience at the heart of Asia\'s fintech evolution.',
                'media_url' => 'https://www.youtube.com/watch?v=example',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-indonesia-mci-joins-money-20-20-asia-2024-get-schedule-activities/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3HSAAB2RHH397ZMQAEJQ48.jpeg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-04-21',
            ],


            [
                'title' => 'Connecting Startups: MCI’s XYZ Value Creation Program at Money 20/20 Asia - News Main',
                'content_heading' => 'Mandiri Capital Indonesia (MCI), the venture capital arm of Bank Mandiri, is taking its
matchmaking program Xponent global. Debuting at Money 20/20 Asia in Bangkok, Xponent
connects startups and tech companies with Mandiri Group\'s business units. This fosters
collaboration and fuels growth within the fintech ecosystem.',
                'content' => 'Now in its fourth edition, Xponent leverages Money 20/20 Asia\'s startup ecosystem to
expand its reach across the Asian financial landscape.
The program has two main goals: firstly, to bridge the gap between startups and Mandiri\'s
business units, and secondly, to provide startups with valuable financial tools and insights.
Established MCI portfolio players like Mekari, Ayoconnect, and KoinWorks will also
participate, generating discussions that spark new collaborative opportunities.
Mandiri Capital Indonesia invests in and nurtures promising startups, particularly those
focused on financial technology (fintech) innovation. Boasting a portfolio of 22 investments
across 15+ sectors, Mandiri Capital Indonesia supports Indonesia\'s financial sector and its
international presence.\',
<h2>Xponent Activities at Money 20/20 Asia</h2>
The agenda for Xponent at Money 20/20 is packed with activities tailored to maximize
interaction and partnership opportunities. These include:
<ul>
<li><strong>Interactive Discussions</strong>: Leading figures from MCI\'s portfolio,
such as Ayoconnect, and KoinWorks, will provide insights into current fintech trends and the
future landscape of the industry.
</li>
<li><strong>Business Matchmaking Sessions: </strong>These sessions facilitate the
discovery of potential collaborations between startups and Mandiri’s extensive business
network, enhancing the integration of new technologies into established financial
systems.
</li>
<li><strong>Speed Dating Sessions: </strong>Offering startups opportunities to pitch
their innovations to potential partners and investors, these sessions are designed to foster
quick connections and highlight emerging business ideas.
</li>
</ul>
These activities are expected to lead to meaningful partnerships that could significantly
influence participants\' growth trajectories and strategic directions.
Ronald Simorangkir, Chief Executive Officer of Mandiri Capital Indonesia, echoed this
sentiment, stating,
"We are thrilled to connect with innovative minds and forward-thinking
companies overseas. As we extend our reach beyond borders, the essence of Xponent lies
not merely in the events we host or the deals we forge, but in the enduring partnerships and
mutual growth we cultivate.
"
&nbsp;
<h2>Participated Business Units from Mandiri Group</h2>
Several key business units from Mandiri Group will be attending Money 20/20 Asia to
explore potential collaborations and integrations with innovative startups.
The specific units attending are:
<ul>
<li>Enterprise Data &amp; Analytics</li>
<li>Consumer Credit Risk &amp; Analytics</li>
<li>CISO</li>
</ul>
These units are expected to play a crucial role in this year\'s discussions and matchmaking
sessions.
By connecting promising startups with established corporate entities and investors, Xponent
is setting the stage for a wave of innovation that could redefine financial services across Asia
and beyond.
As MCI participates in Money 20/20 Asia with the Xponent program, it underscores the
importance of collaboration in the fintech industry. Such partnerships are not merely
beneficial; they are essential for the sustained growth and evolution of the financial sectors.
Through these initiatives, MCI is committed to not just participating in the industry but is
actively working to strengthen and redefine its future, promising a more interconnected and
innovative tomorrow for startups and established businesses alike.
&nbsp;
Register your startup to discover what\'s possible at',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/connecting-startups-mcis-xyz-value-creation-program-at-money-20-20-asia/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3HSM30X0DG9VFDH7B2W9XX.jpeg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-04-24',
            ],


            [
                'title' => 'Mandiri Capital Indonesia mendorong Inovasi Digital melalui Mandiri Innovation Hub 2024. - Press Release',
                'content_heading' => '<strong>Jakarta, 31 Desember 2024</strong> – Mandiri Capital Indonesia (MCI),
perusahaan anak Bank Mandiri yang bergerak di industri modal ventura, secara proaktif
mendorong inovasi di teknologi finansial <em>(fintech).
</em> Melalui inisiatif
<strong>Mandiri Innovation Hub</strong> yang bertepatan dengan acara <em>Singapore
Fintech Festival 2024</em>
, MCI berkesempatan untuk melakukan <em>showcasing</em>
inovasi digital Bank Mandiri, yaitu Livin’ &amp; Kopra, kepada berbagai perusahaan
mancanegara seperti Visa, JP Morgan, dan AI Rudder.',
                'content' => '<strong>Tri Nugroho</strong>
,
<strong>General Manager &amp; Country Head, Bank
Mandiri Singapore</strong> mengatakan,
“Mandiri Innovation Hub memberikan kesempatan
bagi kami untuk memperkenalkan potensi inovasi lokal di tingkat regional. Sebagai cabang
internasional Bank Mandiri yang berbasis di Singapura, yang merupakan salah satu kota
pusat bisnis dunia, kami berkomitmen untuk mendukung transformasi digital dan
memperluas akses terhadap solusi keuangan yang lebih inklusif di seluruh pasar Asia
Tenggara dan internasional.
” Tutupnya.
Pada kesempatan yang sama, MCI juga menyelenggarakan <em>business
matchmaking</em> <em>program</em> antara startup yang bergerak pada bidang
<em>Artificial Intelligence </em>(AI),
<em>Renewable Energy, Waste Management, Fraud
Detection,
</em>dan <em>Cross-Border Payment &amp; Remittance </em>dengan
berbagai unit kerja bisnis dalam ekosistem Mandiri Group. Program ini memberikan
kesempatan bagi MCI untuk berbagi wawasan mengenai teknologi terbaru yang dapat
mendorong transformasi digital sektor keuangan di Indonesia.
<strong>Ronald Simorangkir, CEO Mandiri Capital Indonesia</strong> mengatakan,
“Mandiri Innovation Hub menandai momen penting tidak hanya bagi Bank Mandiri, tetapi
juga bagi Mandiri Capital Indonesia. Bersama-sama kita dapat mendorong revolusi fintech
ke depan, menjadikan layanan perbankan lebih mudah diakses dan inklusif bagi semua.
”
paparnya.
Mandiri Innovation Hub juga menyelenggarakan sesi <em>panel discussion</em> dengan
sejumlah topik yang relevan, antara lain penerapan <em>Artificial Intelligence</em> (AI)
dalam sektor keuangan, ekonomi sirkular, dan pengembangan inovasi digital yang
berkelanjutan. Diskusi ini bertujuan untuk menggali potensi teknologi seperti AI, dalam
mempercepat efisiensi dan aksesibilitas layanan keuangan, serta bagaimana sektor
<em>fintech</em> dapat berperan dalam mendukung ekonomi sirkular dan transformasi
digital di Indonesia.
<strong>Kevin Wu, CEO AI Rudder </strong>mengatakan,
“Mengembangkan teknologi
<em>conversational AI</em>
, terutama <em>AI Voice Technology</em>
, adalah salah satu
cara kami membantu bisnis berinteraksi lebih efisien dengan pelanggan. Langkah ini sejalan
dengan upaya kami bersama Bank Mandiri untuk mendorong digitalisasi yang optimal.
Dengan ini, kami percaya AI akan berperan penting dalam transformasi sektor keuangan,
tidak hanya di Indonesia, tetapi juga di ranah global,
” ujarnya
***
<strong>Tentang Mandiri Capital Indonesia</strong>
PT Mandiri Capital Indonesia (“MCI”) adalah anak perusahaan Bank Mandiri yang bergerak
di bidang venture capital yang bertindak sebagai penghubung atau jembatan antara Mandiri
Group dan startup untuk memfasilitasi inisiatif inovasi dan sinergi. MCI berkomitmen untuk
membangun kemitraan strategis guna mempercepat inovasi dalam ekosistem digital
Indonesia. Selain itu, MCI juga berinvestasi pada startup yang memiliki keselarasan inovasi
dan sinergi dengan Mandiri Group. Sejak didirikan pada tahun 2015, MCI telah memfasilitasi
investasi dan membina kemitraan antara portfolionya dan juga Mandiri Group. Saat ini, MCI
memiliki beberapa pendanaan, yakni <em>Balance Sheet Fund, Merah Putih Fund
</em>dan <em>Indonesia Impact Fund.
</em>Beberapa nama perusahaan terkemuka yang
menjadi bagian dari portfolio MCI saat ini meliputi: AgriAku, Amartha, Ayoconnect,
Bukalapak, Cakap, Cashlez, Crowde, FitAja!, GoTo, Greenhope, Halofina, Investree, iSeller,
Kecilin, Koinworks, LinkAja, Mekari, PrivyID, PTEN, Qoala, Sinbad, Yokke. Selain itu, MCI
juga mendukung startup melalui beberapa program unggulan seperti Xponent untuk
kolaborasi dan Zenith untuk akselerasi.',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-indonesia-mendorong-inovasi-digital-melalui-mandiri-innovation-hub-2024/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3HT74VJMCQ7CQP2Z8MFAF8.jpeg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-12-31',
            ],


            [
                'title' => 'Program Xponent MCI di Money 20/20 Asia Jadi Jembatan Konektivitas Dunia - Insight',
                'content_heading' => '<span style="font-weight: 400;">Mandiri Capital Indonesia (MCI), perusahaan modal ventura
Bank Mandiri, membawa program matchmaking-nya, Xponent, ke tingkat global. Melalui
kiprah awalnya di Money 20/20 Asia di Bangkok, Xponent menghubungkan startup dan
perusahaan teknologi dengan unit-unit bisnis Mandiri Group. Hal ini mendorong kolaborasi
dan mendorong pertumbuhan dalam ekosistem fintech.
</span>',
                'content' => '<span style="font-weight: 400;">Kini, di pagelaran keempatnya, Xponent memanfaatkan
ekosistem startup Money 20/20 Asia untuk memperluas jangkauannya di seluruh lanskap
keuangan Asia.
</span>
<span style="font-weight: 400;">Program ini memiliki dua tujuan utama, yakni menjembatani
gap antara startup dan unit bisnis Mandiri serta menyediakan tools dan insight keuangan
bagi startup. Para pemain portofolio MCI yang sudah mapan seperti Mekari, Ayoconnect,
dan KoinWorks juga akan berpartisipasi, yang diharapkan dapat menghasilkan diskusi yang
memicu peluang kolaborasi baru,
</span>
<span style="font-weight: 400;">Mandiri Capital Indonesia berinvestasi dan membina
startup-startup yang menjanjikan, terutama yang berfokus pada inovasi fintech. Dengan
portofolio investasi sebanyak 22 perusahaan di lebih dari 15 sektor, Mandiri Capital
Indonesia mendukung sektor keuangan Indonesia dan kiprahnya di kancah
internasional.
</span>
<span style="font-weight: 400;">
</span>
<b>Kegiatan Xponent di Money 20/20 Asia</b>
<span style="font-weight: 400;">Agenda Xponent di Money 20/20 dimeriahkan dengan
berbagai kegiatan yang dirancang untuk memaksimalkan interaksi dan peluang kemitraan.
Kegiatan-kegiatan tersebut antara lain:</span>
<ul>
<li><span style="font-weight: 400;">
</span><span style="font-weight:
400;">Diskusi Interaktif: Para praktisi terkemuka dari portofolio MCI, seperti Ayoconnect, dan
KoinWorks, akan memberikan wawasan tentang tren fintech saat ini dan lanskap industri
masa depan.
</span></li>
<li><span style="font-weight: 400;">
</span><span style="font-weight:
400;">Sesi Matchmaking Bisnis: Sesi ini akan memfasilitasi penemuan potensi kolaborasi
antara startup dan jaringan bisnis Mandiri yang luas, meningkatkan integrasi teknologi baru
ke dalam sistem keuangan eksisting.
</span></li>
<li><span style="font-weight: 400;">
</span><span style="font-weight:
400;">Sesi Speed Dating: Menawarkan kesempatan kepada para startup untuk
mempresentasikan inovasi mereka kepada calon mitra dan investor. Sesi ini dirancang untuk
membina kemitraan yang cepat dan berfokus pada ide-ide bisnis yang sedang
berkembang.
</span></li>
</ul>
<span style="font-weight: 400;">Kegiatan ini diharapkan dapat menghasilkan kemitraan
yang secara signifikan memengaruhi arah pertumbuhan strategis para peserta.
</span>
<span style="font-weight: 400;">Ronald Simorangkir, Chief Executive Officer Mandiri Capital
Indonesia, mengungkapkan hal yang selaras.
</span>
<span style="font-weight: 400;">"Kami sangat senang dapat terhubung dengan para pemikir
inovatif dan perusahaan-perusahaan yang berpikiran maju di luar negeri. Seiring dengan
perluasan jangkauan kami ke luar negeri, esensi dari Xponent tidak hanya terletak pada
acara yang kami selenggarakan atau kesepakatan yang kami bangun, tetapi juga pada
kemitraan yang langgeng dan pertumbuhan saling menguntungkan.
"
</span>
<b>Unit-unit Bisnis dari Mandiri Group yang Berpartisipasi</b>
<span style="font-weight: 400;">Beberapa unit bisnis utama dari Mandiri Group akan hadir di
Money 20/20 Asia untuk menjajaki potensi kolaborasi dan integrasi dengan
perusahaan-perusahaan rintisan yang inovatif.
</span>
<span style="font-weight: 400;">Unit-unit yang akan hadir adalah:</span>
<ul>
<li><span style="font-weight: 400;">Enterprise Data &amp; Analytics</span></li>
<li><span style="font-weight: 400;">Consumer Credit Risk &amp;
Analytics</span></li>
<li><span style="font-weight: 400;">CISO</span></li>
</ul>
<span style="font-weight: 400;">Unit-unit ini diharapkan dapat memainkan peran penting
dalam diskusi dan sesi matchmaking tahun ini.
</span>
<span style="font-weight: 400;">Dengan menghubungkan startup potensial dengan
perusahaan dan investor berpengalaman, Xponent menyiapkan panggung untuk gelombang
inovasi yang dapat memberikan transformasi layanan keuangan di Asia.
</span>
<span style="font-weight: 400;">Partisipasi MCI di Money 20/20 Asia dengan program
Xponent menggarisbawahi pentingnya kolaborasi dalam industri fintech. Kemitraan ini tidak
hanya menguntungkan, namun juga penting untuk pertumbuhan dan evolusi sektor
keuangan yang berkelanjutan.
</span>
<span style="font-weight: 400;">Melalui inisiatif ini, MCI berkomitmen untuk berpartisipasi
dalam industri serta secara aktif berupaya memperkuat dan mendefinisikan kembali masa
depan industri ini, di mana masa depan yang lebih terhubung dan inovatif bagi startup dan
bisnis dapat tercapai.
</span>
<span style="font-weight: 400;">
</span>
<span style="font-weight: 400;">
</span>
<span style="font-weight: 400;">Ambil peluang untuk startup Anda dengan mendaftar
di:</span>
<span style="font-weight: 400;">https://bit.ly/XponentMoney2020 </span>',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/program-xponent-mci-di-money-20-20-asia-jadi-jembatan-konektivitas-dunia/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3HVA7SQ8KGMEGNN56W0N5T.jpg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-07-05',
            ],




            [
                'title' => 'Mandiri Capital Masih Lihat Peluang Startup Meski Suku Bunga Tinggi - News Main',
                'content_heading' => 'Bisnis.com, JAKARTA — PT Mandiri Capital Indonesia (MCI) buka-bukaan soal strategi di
tengah tren suku bunga yang tinggi. Perusahaan modal ventura di bawah Bank Mandiri
tersebut mengakui suku bunga menjadi salah satu metrik makroekonomi yang mereka lihat
sebelum melakukan investasi ke perusahaan rintisan atau startup. Kendati demikian, CEO
Mandiri Capital Indonesia Ronald Simorangkir mengungkapkan perseroan akan tetap secara
aktif mencari kesempatan baru dengan proses yang hati-hati.
“Walaupun kuartal mendatang
memiliki potensi untuk suku bunga meningkat, MCI akan tetap secara aktif mencari
opportunity baru dengan proses yang prudent,
” ujarnya saat dihubungi Bisnis, Minggu
(5/5/2024). Ronald menambahkan pihaknya melihat startup tetap memiliki prospek
perkembangan yang besar pada 2024 khususnya untuk beberapa sektor seperti pertanian
dan budidaya perikanan, industri manufaktur, energi terbarukan, serta artificial intelligence
(AI).
“Namun, MCI tetap melihat semua sektor secara bersamaan untuk menemukan
opportunity yang terbaik,
” ungkapnya.',
                'content' => 'Ronald menambahkan pihaknya melihat dari segala aspek dalam melakukan pendanaan ke
startup termasuk strategi perseroan untuk bertumbuh dengan sehat dan mencapai
profitabilitas.
“Selain itu, MCI merupakan strategic investor yang mana MCI secara aktif
membantu startups untuk berkolaborasi dengan ekosistem kami seperti Mandiri Group,
BUMN, dan institusi lain. Melalui kolaborasi ini, startup akan mendapatkan growth yang
signifikan dengan tidak memakan biaya yang banyak,
” ungkapnya.
&nbsp;
MCI belum dapat membagikan nominal pendanaan pada kuartal I/2024. Namun, dalam
periode tersebut, perseroan sedang dalam proses due diligence kepada beberapa startup
dari industri yang berbeda-beda.
“MCI melakukan proses due diligence yang mendalam
untuk mengurangi risiko investasi dan juga memastikan startup yang diinvestasi oleh MCI
mendapatkan perkembangan bisnis yang cepat melalui value creation yang diberikan oleh
MCI,
” jelasnya. Adapun, startup yang sedang dalam proses due diligence mendalam oleh
MCI bergerak dari sektor yang berbeda-beda seperti manufaktur, teknologi kesehatan,
aquaculture, otomotif, proptech, procurement solutions, dan logistics. Ronald
menambahkan MCI tidak memiliki target ataupun limitasi jumlah investasi di setiap periode.
“Jadi, MCI melihat prospek investasi secara opportunistic dan tidak periodic. MCI
merupakan VC multi-stage yang bergerak di sektor agnostik. Oleh karena itu, MCI secara
aktif melihat keseluruhan ekosistem startups dan mengidentifikasi startup yang memiliki
prospek yang tinggi dan juga di beberapa kasus memiliki potensi value creation yang besar,
”
ungkapnya',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-masih-lihat-peluang-startup-meski-suku-bunga-tinggi/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3HYWKW1BX2Z7AEQ8MJZ676.jpg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-05-07',
            ],


            [
                'title' => 'Mandiri Capital Indonesia Jajaki Pasar Global Lewat Program Xponent di Bangkok - News
Main',
                'content_heading' => '<strong>KONTAN.CO.ID -</strong>
<strong>JAKARTA.
</strong>
Mandiri Capital Indonesia
(MCI) mantap untuk memperluas cakupan investasinya ke skala global. Perusahaan modal
ventura dari Bank Mandiri Group ini sukses menggelar program Xponent pertamanya di
Bangkok dengan membowa tampil sembilan portofolionya.',
                'content' => 'Peluncuran program Xponent pertama itu digelar dalam perhelatan fintech Money 20/20
Asia yang digelar pada 23-25 April 2024. Sembilan portofolio MCI yang ikut berkesempatan
melakukan showcase produk dan layanannya, yaitu Mekari, KoinWorks, Ayoconnect, Delos,
iSeller, Kecilin, Fishlog, Imajin, dan AI Rudder.
<div class="high-10"></div>
Money 20/20 Asia merupakan acara global untuk ekosistem digital yang mempertemukan
para pemimpin industri dan startup berpengaruh dari berbagai belahan dunia. Peluncurnan
program
Xponent dalam perhelatan itu menandai langkah strategis MCI untuk mengintegrasikan
startups dan perusahaan global ke dalam ekosistem mandiri grup.
Ronald Simorangkir, Chief Executive Officer of Mandiri Capital Indonesia mengatakan,
pihaknya untuk mengidentifikasi kebutuhan unit bisnis Bank Mandiri dan berupaya
menghadirkan value proposition yang selaras dengan tujuan strategis Mandiri Group.
“Melalui acara Money 20/20 kami berharap dapat menemukan startup yang memiliki solusi
inovatif dan terobosan baru,
” kata dia dalam keterangan resminya, Sabtu (27/4).
&nbsp;
&nbsp;
Ia bilang, MCI telah meluncurkan program XYZ yang mencakup beberapa inisiatif untuk
mengukuhkan posisinya sebagai investor strategis. Pertama, program Xponent yang
bertujuan membantu ekspansi startup dengan memfasilitasi akses pasar dan memperkuat
keselarasan bisnis antara startup dan unit bisnis Bank Mandiri.
Program Xponent telah melibatkan 95 startup dalam tiga tahap, menandatangani 12 nota
kesepahaman (MoU), dan melibatkan 25 unit bisnis dalam Bank Mandiri dan anak
perusahaannya.
Kedua, program Xchange, yakni kegitana yang melakukan studi banding dengan
mengunjungi lab inovasi internasional. Ketiga, program Y-Axis dengan tujuan embangun
platform jaringan bagi startup dengan investor, komunitas teknologi, BUMN, dan korporasi.
Keempat, program Zenith. Ini merupakan program akselerasi yang berlangsung selama 4
bulan yang dirancang untuk mendorong pertumbuhan bisnis melalui mentoring, lokakarya,
dan integrasi ekosistem dengan Mandiri Group.
Ronald menambahkan, kehadiran MCI di Money 20/20 Asia Aladdin merupakan momen
penting dalam perjalanan MCI menuju ekspansi regional dan global.
“Xponent menjadi
langkah penting untuk mengintegrasikan startup dan perusahaan global ke dalam jaringan
kami.
&nbsp;
&nbsp;
Kedepannya, MCI akan berkomitmen untuk terus memberikan dampak bisnis yang positif
bagi Bank Mandiri sekaligus membangun ekosistem startup Indonesia,
" kata Dennis
Pratistha, Chief Investment Officer of Mandiri Capital Indonesia,
” ujarnya.
Ronald mengatakan, fokus utama MCI adalah untuk memupuk penciptaan value creation
dan peluang investasi melalui kemitraan kolaboratif di panggung global. Money 20/20 Asia
menjadi platform bagi MCI untuk terhubung dengan berbagai pelopor industri,
mengeksplorasi tren yang muncul, dan mengembangkan jangkauannya ke pasar
internasional, hingga akhirnya dapat mempercepat pertumbuhan usaha inovatif di pasar
global.
Saat ini, MCI memiliki portofolio lebih dari 20 startup dari 14 jenis sektor industri, termasuk
pemberian pinjaman, B2B value chain, dan penyedia pembayaran.',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-indonesia-jajaki-pasar-global-lewat-program-xpon
ent-di-bangkok/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3J18TAFKDTFVRAEGV1SAYJ.jpg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-05-12',
            ],


            [
                'title' => 'Tuntas Xponent Money 20/20 Asia, MCI Siap Tembus Pasar Regional-Global - News Main',
                'content_heading' => '<strong>Jakarta, CNBC Indonesia -</strong>
Mandiri Capital Indonesia (MCI), perusahaan
modal ventura korporat yang didukung oleh lembaga keuangan terbesar Indonesia, PT Bank
Mandiri (Persero) Tbk menggelar program Xponent pertamanya di Bangkok, Thailand.
Money 20/20 Asia merupakan acara global untuk ekosistem digital yang mempertemukan
para pemimpin industri dan startup berpengaruh dari berbagai belahan dunia. Sejalan
dengan visi MCI untuk being global kehadiran Xponent di Money 20/20 pada 23-25 april
2024 menandai langkah strategis MCI untuk mengintegrasikan startups dan perusahaan
global ke dalam ekosistem mandiri grup.',
                'content' => '"Kami berfokus untuk mengidentifikasi kebutuhan unit bisnis Bank Mandiri dan berupaya
menghadirkan value proposition yang selaras dengan tujuan strategis Mandiri Group.
Melalui acara Money 20/20 kami berharap dapat menemukan startup yang memiliki solusi
inovatif dan terobosan baru,
" ungkap Chief Executive Officer of Mandiri Capital
Indonesia Ronald Simorangkir.
Mengukuhkan posisinya sebagai investor strategis, MCI telah meluncurkan program XYZ
yang mencakup beberapa inisiatif, di antaranya:
<strong>● Xponent:</strong>
Membantu ekspansi startup dengan memfasilitasi akses pasar
dan memperkuat keselarasan bisnis antara startup dan unit bisnis Bank Mandiri. Program ini
telah melibatkan 95 startup pada 3 batch, menandatangani 12 MoU, dan melibatkan 25 unit
bisnis dalam Bank Mandiri dan anak perusahaannya.
<strong>● Xchange:</strong>
Melakukan studi banding dengan mengunjungi lab inovasi
internasional.
<strong>● Y-Axis:</strong>
komunitas teknologi, BUMN, dan korporasi.
Membangun platform jaringan bagi startup dengan investor,
<strong>● Zenith:</strong>
Program akselerasi selama 4 bulan yang dirancang untuk
mendorong pertumbuhan bisnis melalui mentoring, lokakarya, dan integrasi ekosistem
dengan Mandiri Group.
Pada acara Money 20/20 Asia, MCI menggandeng sembilan startup portofolio dan finalis
Zenith untuk memperkenalkan produk dan menyampaikan gagasan bisnis mereka.
Sembilan startup tersebut adalah Mekari, KoinWorks, AyoConnect, Delos, iSeller, Kecilin,
Fishlog, Imajin, dan AI Rudder.
"Kehadiran MCI di Money 20/20 Asia adalah momen penting dalam perjalanan kami menuju
ekspansi regional dan global. Xponent lebih dari sekadar program; namun menjadi langkah
penting untuk mengintegrasikan startup dan perusahaan global ke dalam jaringan kami.
Kedepannya, MCI akan berkomitmen untuk terus memberikan dampak bisnis yang positif
bagi Bank Mandiri sekaligus membangun ekosistem startup Indonesia,
" kata Dennis
Pratistha, Chief Investment Officer of Mandiri Capital Indonesia.
"Mengukuhkan posisi kami sebagai penggerak utama dalam membangun jembatan sinergi
internasional, kami mendukung ekspansi ekosistem startup Indonesia dimana Ini dilakukan
dengan memfasilitasi akses bagi startup global ke pasar Indonesia yang berkembang pesat,
dan berbagi ekosistem dan pengetahuan,
" tambah Dennis.
Fokus utama MCI adalah untuk memupuk penciptaan value creation dan peluang investasi
melalui kemitraan kolaboratif di panggung global. Money 20/20 Asia menjadi platform bagi
MCI untuk terhubung dengan berbagai pelopor industri, mengeksplorasi tren yang muncul,
dan mengembangkan jangkauannya ke pasar internasional, hingga akhirnya dapat
mempercepat pertumbuhan usaha inovatif di pasar global.
Saat ini, MCI memiliki beberapa portofolio, dengan jumlah lebih dari 20 startup dari 14 jenis
sektor industri, termasuk pemberian pinjaman, B2B value chain, dan penyedia pembayaran.',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/tuntas-xponent-money-20-20-asia-mci-siap-tembus-pasar-regional-global/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3J1T8X5ES7JE7036R89KBZ.jpeg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-05-12',
            ],


            [
                'title' => 'Mandiri Capital Indonesia Partisipasi dalam Program Relawan Bakti BUMN 2024 - Press Release',
                'content_heading' => '<strong>IDXChannel</strong> - PT
<a
href="https://www.idxchannel.com/tag/mandiri-capital" rel="dofollow">Mandiri
Capital</a>
Indonesia (<a href="https://www.idxchannel.com/tag/mci"
rel="dofollow">MCI</a>) terpilih oleh Kementerian BUMN Republik Indonesia untuk turut
berpartisipasi dalam Program Relawan Bakti BUMN Batch VI tahun 2024.',
                'content' => '“Kami berharap teman-teman relawan dapat mengimplementasikan core value AKHLAK
dengan purpose yang lebih tinggi setelah 5 hari terakhir turut serta dalam program bakti di
Desa Hilisimaetano. Implementasi core value AKHLAK dalam proses bisnis sehari-hari
diharapkan dapat membantu meningkatkan kualitas kinerja perusahaan BUMN, yang pada
akhirnya BUMN dapat memberikan kontribusi lebih pada masyarakat Indonesia”
, kata
Direktur Keuangan, HR &amp; Manajemen Risiko MCI Wisnu Setiadi dalam rilis Rabu
(21/8/2024).
<a href="https://www.idxchannel.com/tag/Desa-Wisata" rel="dofollow">Desa
Wisata</a>
Hilisimaetano dikenal sebagai salah satu destinasi wisata unggulan dengan
keindahan alam dan budaya yang kaya.
Desa ini memiliki tradisi atraksi lompat batu yang pernah menjadi salah satu latar belakang
dalam mata uang seribu rupiah keluaran tahun 1992 silam.
Program Relawan Bakti BUMN merupakan Employee Volunteering Program bagi pegawai
BUMN dengan tujuan untuk meningkatkan peran BUMN sebagai Agent of Development,
implementasi nilai-nilai AKHLAK, dan meningkatkan engagement pegawai melalui
keterlibatan langsung dalam program Tanggung Jawab Sosial &amp; Lingkungan (<a
href="https://www.idxchannel.com/tag/tjsl" rel="dofollow">TJSL</a>).
Adapun 10 Relawan Muda BUMN yang ditugaskan ke<a
href="https://www.idxchannel.com/tag/nias" rel="dofollow">
Nias</a>
Selatan berasal dari
berbagai BUMN seperti Bank Mandiri, BNI, BSI, BTN, Pertamina, PLN, PGN, Jamkrindo,
Askrindo, dan Pegadaian. 10 Relawan Muda tersebut turut berperan aktif dalam kegiatan
sosial, mulai dari pendidikan, pengelolaan sampah, kesehatan, hingga perbaikan
infrastruktur lokal. Kehadiran para relawan diharapkan dapat memberikan dampak positif
bagi masyarakat desa.
Sebagai bentuk dukungan terhadap peningkatan kualitas pendidikan di Desa Hilisimaetano,
MCI berkolaborasi dengan Cakap, startup pengembang aplikasi edukasi teknologi asal
Indonesia yang fokus pada pendidikan daring dua arah.
Melalui kolaborasi ini, MCI menyediakan 100 voucher belajar bahasa Inggris gratis selama
tiga bulan untuk masyarakat setempat dan membagikan modul bahasa inggris untuk
Pariwisata dengan harapan inisiatif ini dapat membuka peluang baru bagi warga desa dalam
menghadapi tantangan global di era digital.
“Program ini menjadi peluang bagi MCI untuk mengajak startup dalam portofolio kami untuk
berkontribusi langsung kepada masyarakat, khususnya di Desa Hilisimaetano, sebuah desa
dengan kekayaan sejarah dan budaya lokal yang luar biasa. Kami ingin menunjukkan bahwa
solusi teknologi yang ditawarkan oleh startup tidak hanya relevan di pasar, tetapi juga
mampu memberikan akses dan peluang untuk meningkatkan kualitas hidup masyarakat,
"
ujar Wisnu.',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-indonesia-partisipasi-dalam-program-relawan-bakti-bumn-2024/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3J3Y4K35BZFW1EPBXJM57D.jpg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-09-05',
            ],


            [
                'title' => 'Mandiri Capital Indonesia Ramaikan Relawan Bakti BUMN 2024 di Desa Wisata
Hilisimaetano - Press Release',
                'content_heading' => '<strong>Suara.com </strong>-
Dalam rangka memperingati Hari Kemerdekaan Republik
Indonesia yang ke-79, PT Mandiri Capital Indonesia (“MCI”) terpilih oleh Kementerian BUMN
Republik Indonesia untuk turut berpartisipasi dalam Program Relawan Bakti BUMN Batch VI
tahun 2024 dimana Direktur Keuangan, HR &amp; Manajemen Risiko MCI, Wisnu Setiadi,
sebagai salah satu Direktur Muda BUMN ditugaskan untuk memberikan sharing session
pada relawan BUMN yang ditempatkan pada Desa Wisata Hilisimaetano, Nias Selatan,
Pulau Nias, Sumatera Utara.',
                'content' => 'Desa Wisata Hilisimaetano dikenal sebagai salah satu destinasi wisata unggulan dengan
keindahan alam dan budaya yang kaya, dimana desa ini memiliki tradisi atraksi lompat batu
yang pernah menjadi salah satu latar belakang dalam mata uang seribu rupiah keluaran
tahun 1992 silam.
Program Relawan Bakti BUMN merupakan Employee Volunteering Program bagi pegawai
BUMN dengan tujuan untuk meningkatkan peran BUMN sebagai Agent of Development,
implementasi nilai-nilai AKHLAK, dan meningkatkan engagement pegawai melalui
keterlibatan langsung dalam program Tanggung Jawab Sosial &amp; Lingkungan (TJSL).
Adapun 10 Relawan Muda BUMN yang ditugaskan ke Nias Selatan berasal dari berbagai
BUMN seperti Bank Mandiri, BNI, BSI, BTN, Pertamina, PLN, PGN, Jamkrindo, Askrindo,
dan Pegadaian. 10 Relawan Muda tersebut turut berperan aktif dalam kegiatan sosial, mulai
dari pendidikan, pengelolaan sampah, kesehatan, hingga perbaikan infrastruktur lokal.
Kehadiran para relawan diharapkan dapat memberikan dampak positif bagi masyarakat
desa.
“Kami berharap teman-teman relawan dapat mengimplementasikan core value AKHLAK
dengan purpose yang lebih tinggi setelah 5 hari terakhir turut serta dalam program bakti di
Desa Hilisimaetano. Implementasi core value AKHLAK dalam proses bisnis sehari-hari
diharapkan dapat membantu meningkatkan kualitas kinerja perusahaan BUMN, yang pada
akhirnya BUMN dapat memberikan kontribusi lebih pada masyarakat Indonesia”
, ungkap
Wisnu Setiadi, Direktur Keuangan, HR &amp; Manajemen Risiko MCI dalam keterangan
tertulisnya, Rabu (21/8/2024).
Sebagai bentuk dukungan terhadap peningkatan kualitas pendidikan di Desa Hilisimaetano,
MCI berkolaborasi dengan Cakap, startup pengembang aplikasi edukasi teknologi asal
Indonesia yang fokus pada pendidikan daring dua arah.
Melalui kolaborasi ini, MCI menyediakan 100 voucher belajar bahasa Inggris gratis selama
tiga bulan untuk masyarakat setempat dan membagikan modul bahasa inggris untuk
Pariwisata dengan harapan inisiatif ini dapat membuka peluang baru bagi warga desa dalam
menghadapi tantangan global di era digital.
“Program ini menjadi peluang bagi MCI untuk mengajak startup dalam portofolio kami untuk
berkontribusi langsung kepada masyarakat, khususnya di Desa Hilisimaetano, sebuah desa
dengan kekayaan sejarah dan budaya lokal yang luar biasa. Kami ingin menunjukkan bahwa
solusi teknologi yang ditawarkan oleh startup tidak hanya relevan di pasar, tetapi juga
mampu memberikan akses dan peluang untuk meningkatkan kualitas hidup masyarakat.
"
tutup Wisnu.',
                'media_url' => '',
                'media_source_url' => 'https://mandiri-capital.co.id/mandiri-capital-indonesia-ramaikan-relawan-bakti-bumn-2024-di-
desa-wisata-hilisimaetano/',
                'status' => 'published',
                'front_image' => 'blog-images/01JK3J5JPGJE31BE19DTKGNJDE.jpeg',
                'headline_image' => '',
                'featured_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-09-05',
            ],

        ];

        foreach ($posts as $post) {
            $slug = Str::slug($post['title']);

            // Create or update the blog post
            $blogPost = BlogPost::updateOrCreate(
                ['slug' => $slug],
                array_merge($post, [
                    'slug' => $slug,
                    'user_id' => $user->id,
                ])
            );

            // Get the appropriate category based on the post title
            if ($post['title'] === 'Program Xponent MCI di Money 20/20 Asia Jadi Jembatan Konektivitas Dunia - Insight') {
                $category = BlogCategory::where('name', 'Blog')->first();
            } else {
                $category = BlogCategory::where('name', 'News')->first();
            }

            $blogPost->categories()->sync([$category->id]);
        }
    }
}
