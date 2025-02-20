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
                'name' => [
                    'en' => 'News',
                    'id' => 'Berita'
                ],
                'slug' => 'news',
            ],
            [
                'name' => [
                    'en' => 'Podcast',
                    'id' => 'Podcast'
                ],
                'slug' => 'podcast',
            ],
            [
                'name' => [
                    'en' => 'Blog',
                    'id' => 'Blog'
                ],
                'slug' => 'blog',
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(
                $category
            );
        }


        // Create sample tags
        $tags = [
            [
                'name' => [
                    'en' => 'Venture Capital',
                    'id' => 'Modal Ventura'
                ],
                'slug' => 'venture-capital',
            ],
            [
                'name' => [
                    'en' => 'Technology',
                    'id' => 'Teknologi'
                ],
                'slug' => 'technology',
            ],
            [
                'name' => [
                    'en' => 'Startups',
                    'id' => 'Perusahaan Rintisan'
                ],
                'slug' => 'startups',
            ],
            [
                'name' => [
                    'en' => 'Fintech',
                    'id' => 'Teknologi Keuangan'
                ],
                'slug' => 'fintech',
            ],
            [
                'name' => [
                    'en' => 'Digital Innovation',
                    'id' => 'Inovasi Digital'
                ],
                'slug' => 'digital-innovation',
            ],
            [
                'name' => [
                    'en' => 'Investment Strategy',
                    'id' => 'Strategi Investasi'
                ],
                'slug' => 'investment-strategy',
            ],
        ];

        foreach ($tags as $tag) {
            BlogTag::updateOrCreate(
                $tag
            );
        }



        // Create sample blog posts
        $posts = [
            [
                'title' => 'Mandiri Capital Indonesia (MCI) Joins Money 20/20 Asia 2024, Get Schedule & Activities -
Event|News Main',
                'slug' => 'mandiri-capital-indonesia-mci-joins-money-20-20-asia-2024-get-schedule-activities-event-news-main',
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
                'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-04-21',
                'blog_category_id' => 1
            ],


            [
                'title' => 'Connecting Startups: MCI’s XYZ Value Creation Program at Money 20/20 Asia - News Main',
                'slug' => 'connecting-startups-mcis-xyz-value-creation-program-at-money-20-20-asia-news-main',
                'content_heading' => 'Mandiri Capital Indonesia (MCI), the venture capital arm of Bank Mandiri, is taking its
matchmaking program Xponent global. Debuting at Money 20/20 Asia in Bangkok, Xponent
connects startups and tech companies with Mandiri Group\'s business units. This fosters
collaboration and fuels growth within the fintech ecosystem.',
                'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-04-24',
                'blog_category_id' => 1
            ],


            [
                'title' => 'Mandiri Capital Indonesia mendorong Inovasi Digital melalui Mandiri Innovation Hub 2024. - Press Release',
                'slug' => 'mandiri-capital-indonesia-mendorong-inovasi-digital-melalui-mandiri-innovation-hub-2024-press-release',
                'content_heading' => '<strong>Jakarta, 31 Desember 2024</strong> – Mandiri Capital Indonesia (MCI),
perusahaan anak Bank Mandiri yang bergerak di industri modal ventura, secara proaktif
mendorong inovasi di teknologi finansial <em>(fintech).
</em> Melalui inisiatif
<strong>Mandiri Innovation Hub</strong> yang bertepatan dengan acara <em>Singapore
Fintech Festival 2024</em>
, MCI berkesempatan untuk melakukan <em>showcasing</em>
inovasi digital Bank Mandiri, yaitu Livin’ &amp; Kopra, kepada berbagai perusahaan
mancanegara seperti Visa, JP Morgan, dan AI Rudder.',
                'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-12-31',
                'blog_category_id' => 1
            ],


            [
                'title' => 'Program Xponent MCI di Money 20/20 Asia Jadi Jembatan Konektivitas Dunia - Insight',
                'slug' => 'program-xponent-mci-di-money-20-20-asia-jadi-jembatan-konektivitas-dunia-insight',
                'content_heading' => '<span style="font-weight: 400;">Mandiri Capital Indonesia (MCI), perusahaan modal ventura
Bank Mandiri, membawa program matchmaking-nya, Xponent, ke tingkat global. Melalui
kiprah awalnya di Money 20/20 Asia di Bangkok, Xponent menghubungkan startup dan
perusahaan teknologi dengan unit-unit bisnis Mandiri Group. Hal ini mendorong kolaborasi
dan mendorong pertumbuhan dalam ekosistem fintech.
</span>',
                'is_content_justified' => false,
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
                'headline_image' => 'blog-images/01JK3HVA7SQ8KGMEGNN56W0N5T.jpg',
                'featured_image' => '',
                'author_name' => 'Mandiri Capital Indonesia',
                'author_title' => '',
                'author_image' => 'blog-images/01JKQGA0N0675TVFQ14SM5682Y.png',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-07-05',
                'blog_category_id' => 3
            ],




            [
                'title' => 'Mandiri Capital Masih Lihat Peluang Startup Meski Suku Bunga Tinggi - News Main',
                'slug' => 'mandiri-capital-masih-lihat-peluang-startup-meski-suku-bunga-tinggi-news-main',
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
                'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-05-07',
                'blog_category_id' => 1
            ],


            [
                'title' => 'Mandiri Capital Indonesia Partisipasi dalam Program Relawan Bakti BUMN 2024 - Press Release',
                'slug' => 'mandiri-capital-indonesia-partisipasi-dalam-program-relawan-bakti-bumn-2024-press-release',
                'content_heading' => '<strong>IDXChannel</strong> - PT
<a
href="https://www.idxchannel.com/tag/mandiri-capital" rel="dofollow">Mandiri
Capital</a>
Indonesia (<a href="https://www.idxchannel.com/tag/mci"
rel="dofollow">MCI</a>) terpilih oleh Kementerian BUMN Republik Indonesia untuk turut
berpartisipasi dalam Program Relawan Bakti BUMN Batch VI tahun 2024.',
            'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-09-05',
                'blog_category_id' => 1
            ],


            [
                'title' => 'Mandiri Capital Indonesia Ramaikan Relawan Bakti BUMN 2024 di Desa Wisata
Hilisimaetano - Press Release',
                'slug' => 'mandiri-capital-indonesia-ramaikan-relawan-bakti-bumn-2024-di-desa-wisata-hilisimaetano-press-release',
                'content_heading' => '<strong>Suara.com </strong>-
Dalam rangka memperingati Hari Kemerdekaan Republik
Indonesia yang ke-79, PT Mandiri Capital Indonesia (“MCI”) terpilih oleh Kementerian BUMN
Republik Indonesia untuk turut berpartisipasi dalam Program Relawan Bakti BUMN Batch VI
tahun 2024 dimana Direktur Keuangan, HR &amp; Manajemen Risiko MCI, Wisnu Setiadi,
sebagai salah satu Direktur Muda BUMN ditugaskan untuk memberikan sharing session
pada relawan BUMN yang ditempatkan pada Desa Wisata Hilisimaetano, Nias Selatan,
Pulau Nias, Sumatera Utara.',
                'is_content_justified' => false,
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
                'author_name' => '',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-09-05',
                'blog_category_id' => 1
            ],
            [
                'title' => 'Mandiri Capital Indonesia Umumkan 5 Startup Zenith Batch II',
                'slug' => 'mandiri-capital-indonesia-umumkan-5-startup-zenith-batch-ii',
                'content_heading' => '<p>Di era digital, sinergi antara korporasi dan startup menjadi kunci inovasi. <em>Zenith Startup Acceleration Program Batch 2 </em>hadir untuk menghubungkan Mandiri Group dengan startup potensial guna mendorong pertumbuhan berkelanjutan.</p>',
                'is_content_justified' => false,
                'content' => '<h2><br>Lima Startup Terpilih</h2><p>Tahun ini, Zenith Batch 2 menggandeng lima startup inovatif:</p><ul><li><strong>DOOgether</strong> – Platform yang menghubungkan pecinta kebugaran dengan gym dan studio olahraga.</li><li><strong>GOERS</strong> – Solusi all-in-one untuk menemukan acara dan membeli tiket dengan mudah.</li><li><strong>Mimin</strong> – Chatbot AI yang meningkatkan keterlibatan pelanggan dan efisiensi bisnis.</li><li><strong>PrimaKu</strong> – Aplikasi parenting untuk pemantauan tumbuh kembang anak dan edukasi orang tua.</li><li><strong>Tada</strong> – Platform loyalitas yang membantu bisnis mempertahankan pelanggan dengan insentif personalisasi.</li></ul><h2>Perjalanan 4 Bulan Menuju Pertumbuhan</h2><p>Zenith Batch 2 berlangsung dari akhir Februari hingga Mei 2025, menawarkan <em>Mentorship</em> intensif dari para ahli, Sesi <em>1:1 coaching</em> untuk solusi bisnis spesifik, dan Akses ke ekosistem Mandiri Group guna membuka peluang kolaborasi strategis.</p><h2>Dukungan Mitra Global</h2><p>Tahun ini, program diperkuat oleh <strong>Austrade, AWS, Karna Law Firm, dan UNDP</strong>, membantu startup dalam ekspansi global, efisiensi operasional, dan kepatuhan hukum.</p><h2>Mendorong Pertumbuhan Startup</h2><p>CEO Mandiri Capital Indonesia, <strong>Ronald Simorangkir</strong>, menyatakan: <em>“Zenith Batch 2 adalah bukti nyata komitmen kami dalam mendukung startup inovatif. Dengan ekosistem Mandiri Group dan dukungan mentor ahli, program ini menjadi katalis pertumbuhan startup dan memperkuat Mandiri Group sebagai mitra strategis.”</em></p><h2>Masa Depan Inovasi Bersama</h2><p>Zenith Batch 2 bertujuan membangun ekosistem kolaboratif dan inovatif bagi startup dan Mandiri Group. Untuk informasi lebih lanjut, kunjungi <strong>mci-zenith.com</strong> atau ikuti perjalanan mereka di media sosial <strong>Mandiri Capital Indonesia</strong>.</p><p><br></p>',
                'media_url' => '',
                'media_source_url' => '',
                'status' => 'published',
                'front_image' => 'blog-images/01JMGX4VRDD2PE4HT5MFHK1PEX.jpeg',
                'headline_image' => 'blog-images/01JMGX4VRDD2PE4HT5MFHK1PEX.jpeg',
                'featured_image' => '',
                'author_name' => 'Mandiri Capital Indonesia',
                'author_title' => '',
                'author_image' => 'blog-images/01JKQGA0N0675TVFQ14SM5682Y.png',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2025-02-18 12:24:00',
                'blog_category_id' => 3
            ],
            [
                'title' => 'Mandiri Buka Tempat Tukar Sampah Jadi Duit di Jalan Sudirman',
                'slug' => 'mandiri-buka-tempat-tukar-sampah-jadi-duit-di-jalan-sudirman',
                'content_heading' => '<p><strong>Jakarta, CNBC Indonesia</strong> - Mandiri Capital Indonesia, anak usaha PT Bank Mandiri (Persero) Tbk., membuka stasiun pembuangan sampah (waste station) di kompleks perkantoran Menara Mandiri. Pegawai perkantoran atau pengelola gedung bisa menggunakan fasilitas tersebut untuk menukar sampah daur ulang dengan poin senilai rupiah.</p>',
                'is_content_justified' => false,
                'content' => '<p>Wakil Direktur Utama Mandiri Alexandra Askandar menjelaskan kolaborasi Mandiri Capital Indonesia (MCI) dengan startup Rekosistem tersebut adalah bagian dari komitmen Mandiri menuju net zero emission.</p><p>Mandiri memiliki dua target net zero emission, yaitu operasional pada 2030 dan finansial pada 2060. Ia menjelaskan target tersebut bisa dicapai dengan beragam cara, tidak melulu dari sisi pendanaan hijau. Mandiri juga mendorong pencapaian ESG lewat proses bisnis dan operasional.</p><p>"Ini enggak bisa dilakukan sendiri, tetapi harus melibatkan beberapa pihak terutama perusahaan anak. Menurut kami [waste station adalah] satu terobosan luar biasa yang perlu didukung bersama," kata Alexandra, Rabu (21/2/2024).</p><p>Ernest Christian Layman, CEO Rekosistem, menjelaskan bahwa sistem penukaran di fasilitas tersebut sangat sederhana. Waste Station menerima sampah dalam kondisi tercampur selama merupakan sampah anorganik yang bisa didaur ulang, seperti botol plastik, kaleng, gelas, hingga minyak jelantah.</p><p>Masyarakat cukup memilah antara sampah anorganik yang bisa didaur ulang dengan sampah lain. MCI dan Rekosistem menargetkan mengumpulkan sekitar 6 ton sampah per hari di Waste Station Menara Mandiri.</p><p>Ernest mengklaim bisnis pengolahan sampah sebetulnya sangat menguntungkan. Buktinya, industri pengelolaan sampah saat ini didukung oleh banyak perusahaan swasta di bidang transportasi sampah hingga lapak sampah.</p><p>Permasalahan sistem pengelolaan sampah di Jakarta dan wilayah lain di Indonesia belum terintegrasi. Ia mengklaim sistem yang dikelola Rekosistem sudah menguntungkan.</p><p>"Makin banyak lokasi, operasional makin murah karena densitas truk makin penuh. Kini [profit margin] kami <em>double digit, feasible. </em>Jadi 3P&nbsp; itu bisa dicapai," kata Ernest.</p>',
                'media_url' => '',
                'media_source_url' => 'https://www.cnbcindonesia.com/tech/20240221121049-37-516345/mandiri-buka-tempat-tukar-sampah-jadi-duit-di-jalan-sudirman',
                'status' => 'published',
                'front_image' => 'blog-images/01JMGXJ79VRWPSWJD1XHFG3VX2.jpg',
                'headline_image' => 'blog-images/01JMGXJ79VRWPSWJD1XHFG3VX2.jpg',
                'featured_image' => '',
                'author_name' => 'CNBC Indonesia',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-02-21 12:30:00',
                'blog_category_id' => 1
            ],
            [
                'title' => 'Startup di 7 Sektor Ini Jadi Incaran Investor Tahun 2024',
                'slug' => 'startup-di-7-sektor-ini-jadi-incaran-investor-tahun-2024',
                'content_heading' => '<p><strong>JAKARTA, investor.id</strong> – Mandiri Capital Indonesia (MCI) mengungkapkan arah tren investor dalam memberikan pendanaan terhadap <em>startup </em>atau perusahaan rintisan. Setidaknya ada tujuh sektor yang menjadi incaran para investor pada 2024 ini.</p>',
                'is_content_justified' => false,
                'content' => '<p>Sektor tersebut di antaranya agrikultur dan akuakultur, industri manufaktur, energi terbarukan (<em>renewable energy</em>), perdagangan karbon (<em>carbon trading</em>), <em>artificial intelligence </em>(AI), <em>cyber security</em>, dan kesehatan digital (<em>digital health</em>).</p><p>\'Jadi, ada intensi kita untuk menumbuh kembangkan investasi kita supaya lebih <em>stable financially </em>dan punya peluang untuk tumbuh. Sektor apa saja? Banyak banget,\' tutur Ronald, saat ditemui di Menara Mandiri 2, Jakarta, Rabu (17/1/2024).</p><p>Ronald menekankan, dalam melihat peluang berinvestasi di <em>startup </em>ini pihaknya mempertimbangkan sejumlah hal. <em>Pertama</em>, berdasarkan sektor-sektor yang tengah didorong dan didukung oleh pemerintah. \'Seperti industri manufaktur, sampai kepada industri kesehatan, kita melihat peluang di industri-industri yang didukung oleh pemerintah. <em>Nah </em>itu kita lihat juga,\' ungkap Ronald.</p><p>\'Misalnya Industri kesehatan ini kan banyak <em>nih </em>dari rumah sakit, alat kesehatan, obat-obatan asuransi, lalu ada cita-cita pemerintah menyingularkan data medis. Ini kan potensinya besar. <em>Nah </em>ini termasuk hal-hal yang kita lihat,\' imbuhnya.</p><p>Kemudian, Ronald menyampaikan, pihaknya juga akan melihat peluang investasi ke <em>startup</em> berdasarkan prioritas dan dukungan dari ekosistem Mandiri Group itu sendiri.</p><p>\'Industri yang punya prioritas dan peluang tumbuh dan dari sisi ekosistem mandiri juga <em>support</em>. Kita kombinasikan dengan kekuatan internal Mandiri Group prioritas dan potensi pertumbuhan industrinya,\' ujarnya.</p><p>Selain itu, pihaknya melihat sejauh mana perusahaan rintisan yang akan diberi pendanaan memiliki peluang untuk tumbuh. Pihaknya juga mempertimbangkan risiko bisnis dan investasi dari sektor tersebut.</p><p>Risiko tersebut diketahui lewat pendekatan yang dijalin oleh Mandiri Capital Indonesia bersama calon-calon perusahaan rintisan yang jadi target investasi. Pendekatan tersebut dilakukan dengan memberikan binaan, <em>project</em>, dan sinergi langsung dengan ekosistem Mandiri Group.</p><p>\'<em>Nah</em>, baru kita lihat \'wah ini bagus\'. Sehingga meminimalisir risiko ketika kita investasi <em>startup</em>-nya <em>gak </em>cuma janji-janji aja. Kita beri pekerjaan, karena Mandiri Group ini kan skala besar, kita juga <em>gak </em>mau menjalin <em>partner </em>yang mengecewakan orang lain makanya kita mitigasi risikonya adalah jauh-jauh hari sebelum investasi,\' urai Ronald.</p><p>\'Kita bina dulu, kita lihat risiko bisnisnya seperti apa. Ada <em>support gak</em>, ada prioritas dari pemerintah <em>gak</em>, ekosistemnya bisa kita <em>support gak</em>, kita kombinasikan seluruh kekuatan yang ada. Itu mitigasi risiko yang bisa kita hindari,\' pungkas dia.</p>',
                'media_url' => '',
                'media_source_url' => 'https://investor.id/finance/351320/startupdi-7sektor-ini-jadi-incaran-investortahun-2024',
                'status' => 'published',
                'front_image' => 'blog-images/01JMGXEEAC42NY09CECT6Q7ANG.jpg',
                'headline_image' => 'blog-images/01JMGXEEAC42NY09CECT6Q7ANG.jpg',
                'featured_image' => '',
                'author_name' => 'Investor ID',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-01-17 12:30:00',
                'blog_category_id' => 1
            ],
            [
                'title' => 'Top 8 Fintech Investors in Indonesia Fueling The Revolution',
                'slug' => 'top-8-fintech-investors-in-indonesia-fueling-the-revolution',
                'content_heading' => '<p>Indonesia’s fintech landscape is booming. Over the past decade, the number of fintech players in Indonesia increased six-fold, rising from just 51 active players in 2011 to 334 in 2022, a 2023 report by AC Ventures and the Boston Consulting Group <a href="https://fintechnews.sg/71494/indonesia/what-does-indonesias-fintech-scene-look-like-in-2023/"><span style="text-decoration: underline;">shows,</span></a> highlighting fintech investors in Indonesia’s growing interest in the segment.</p>',
                'is_content_justified' => false,
                'content' => '<h2>Top Fintech Investors in Indonesia</h2><p>&nbsp;</p><h3>AC Ventures<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:36,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/AC-Ventures-300x36.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/AC-Ventures-300x36.png" width="300" height="36"><figcaption class="attachment__caption"></figcaption></figure></h3><p><a href="https://www.linkedin.com/company/acventuresindonesia/"><span style="text-decoration: underline;">AC Ventures</span></a>, based in Indonesia, is an early-stage technology venture fund known for its substantial support of Indonesian startups, and in particular they’ve developed a reputation as prominent fintech investor in Indonesia</p><p>AC Ventures was formed through the merger of leading VC firms Agaeti Venture Capital and Convergence Ventures and its mission is to partner and and support entrepreneurs, providing not just capital but also operational experience, industry knowledge, and a deep local network.</p><p>The firm invests in early-stage, high-growth Indonesian startups and helps them become world-class companies. Its experienced, tech-focused investment team specializes in consumer businesses, business-to-business (B2B), digital media, fintech, and small and medium-sized enterprise (SME) industries.</p><p>With assets under management (AUM) exceeding US$500 million and over 120 investments, AC Ventures has significantly impacted the market, creating a market cap of US$7 billion.</p><p>Over the past 24 months, AC Ventures has participated in 20 deals, making it the third most active investor in the Indonesian startup scene for the period, according to Tech in Asia. The firm <a href="https://acv.vc/portfolio/"><span style="text-decoration: underline;">counts</span></a> 20 Indonesian fintech companies in its portfolio, including open finance startup Finantier, crypto investment app Nobi, SME finance platform Fazz, and SME banking platform KoinWorks.</p><h3>East Ventures<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:61,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/01/East-Ventures-300x61.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/01/East-Ventures-300x61.png" width="300" height="61"><figcaption class="attachment__caption"></figcaption></figure></h3><p>East Ventures, headquartered in Indonesia, <a href="https://www.linkedin.com/company/eastventures/"><span style="text-decoration: underline;">is</span></a> a pioneering and leading sector-agnostic venture capital firm. Founded in 2009, East Ventures has evolved into a comprehensive platform offering multi-stage investments, ranging from Seed to Growth stages, for over 300 tech companies across Southeast Asia. Though they are sector agnostic they’ve grown to be a notable fintech investor in Indonesia thanks to their early support of some of Indonesia’s most well-known startups.</p><p>As an early supporter of the Indonesian startup ecosystem, East Ventures was the first investor in local unicorn companies Tokopedia and Traveloka. The firm’s portfolio also includes other notable companies such as Ruangguru, Sirclo, Kudo (acquired by Grab), Loket (acquired by Gojek), Tech in Asia, Xendit, IDN Media, MokaPOS (acquired by Gojek), ShopBack, KoinWorks, Waresix, and Sociolla.</p><p>In the past 24 months alone, East Ventures has participated in a staggering 84 deals, making it the most active investor in the Indonesian startup scene for the period, according to Tech in Asia. Its portfolio <a href="https://east.vc/portfolios/"><span style="text-decoration: underline;">comprises</span></a> 16 Indonesian fintech startups, including online lending platform Julo, stock investing app Stockbit, and earned wage access startup Wagely.</p><h3>Mandiri Capital Indonesia<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:170,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/Mandiri-Capital-Indonesia-MCI-300x170.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/Mandiri-Capital-Indonesia-MCI-300x170.png" width="300" height="170"><figcaption class="attachment__caption"></figcaption></figure></h3><p>Mandiri Capital Indonesia (MCI), based in Indonesia, <a href="https://www.linkedin.com/company/mandiri-capital-indonesia-mci/"><span style="text-decoration: underline;">is</span></a> a corporate venture capital (CVC) firm operated by the country’s largest financial institution, Bank Mandiri.</p><p>MCI <a href="https://www.prnewswire.com/apac/news-releases/mandiri-capital-indonesia-and-early-stage-vc-investible-prepare-to-launch-new-global-climate-tech-fund-301970797.html"><span style="text-decoration: underline;">acts</span></a> as a bridge between the Mandiri Group and startups, fostering innovation and synergy initiatives. MCI is dedicated to forming strategic partnerships to accelerate innovation within Indonesia’s digital ecosystem. Furthermore, it invests in startups that align with and synergize with the Mandiri Group’s innovation objectives — making a natural fit to be a recognised as a noteworthy fintech investor in Indonesia.</p><p>Since its inception in 2015, MCI has facilitated investments and cultivated partnerships between its portfolio and the Mandiri Group. Currently, MCI have several funds including: Balance Sheet Fund, Merah Putih Fund, and Indonesia Impact Fund.</p><p>Notable companies in MCI’s current portfolio include AgriAku, Amartha, Ayoconnect, Cakap, Greenhope, iSeller, Kecilin, Privy, PTEN, Qoala, Sinbad, and Yokke. Additionally, MCI champions startups via premier programs such as Xponent for collaboration and Zenith for acceleration.</p><p>Over the past 24 months, MCI has participated in 11 deals, with recent investments including FishLog, Ayoconnect, Delos, and Kecilin, according to Tech in Asia. Its portfolio comprises 11 Indonesian fintech startups, including micro finance marketplace Amartha, application programming interface (API) platform Ayoconnect, peer-to-peer (P2P) lender Investree and digital wallet LinkAja.</p><h3>Antler<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:72,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/Antler-300x72.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/Antler-300x72.png" width="300" height="72"><figcaption class="attachment__caption"></figcaption></figure></h3><p>Antler, headquartered in Singapore, is a <a href="https://www.antler.co/about"><span style="text-decoration: underline;">prominent global investor</span></a> dedicated to supporting the world’s most driven founders from the very beginning of their entrepreneurial journeys. Antler’s global community of builders, investors, operators, experts, and partner organizations backs people from the very start of their founder journey—pre-team or even pre-idea.</p><p><a href="https://www.linkedin.com/company/antlerglobal/"><span style="text-decoration: underline;">Founded</span></a> on the principle that innovation is key to building a better future, Antler partners with exceptional founders across six continents to launch and scale startups addressing significant opportunities and challenges. Antler’s belief in the potential of individuals from diverse backgrounds is reflected in its extensive network of offices in 30 cities worldwide, including major hubs such as Austin, New York, London, Berlin, Stockholm, Bangalore, Jakarta, Singapore, Seoul, Tokyo, and Sydney.</p><p>Since 2018, Antler has helped create and invested in more than 1,000+ startups across a wide range of industries and technologies, with the goal of backing more than 6,000 by 2030.</p><p>Over the past 24 months, Antler has made 53 deals, making it the second most active investor in the Indonesian startup scene for the period, according to Tech in Asia. Recent investments include Academix (Gapai), Yobo, AssetFindr, and Dash Electric, according to Tech in Asia. Antler currently <a href="https://www.antler.co/portfolio"><span style="text-decoration: underline;">has</span></a> nine Indonesian fintech startups in its portfolio, including SME payment and financial solutions ArkoPay, instant refund and return platform Refundway, and SME credit startup Tumbuh.</p><h3>Living Lab Ventures<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:71,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/Living-Lab-Ventures-300x71.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/Living-Lab-Ventures-300x71.png" width="300" height="71"><figcaption class="attachment__caption"></figcaption></figure></h3><p>Living Lab Ventures (LLV), based in Indonesia, is the CVC arm of Sinar Mas Land, <a href="https://www.linkedin.com/company/livinglabventures/"><span style="text-decoration: underline;">focused</span></a> on supporting impactful and scalable businesses across Southeast Asia. The firm <a href="https://www.sinarmasland.com/living-lab-ventures/"><span style="text-decoration: underline;">invests</span></a> in global-minded entrepreneurs building high-impact companies, leveraging its expertise, support services, and ecosystem to facilitate growth. The firm’s sector-agnostic approach targets markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p><p>LLV <a href="https://www.linkedin.com/company/livinglabventures/"><span style="text-decoration: underline;">operates</span></a> on three main pillars: investment, incubation, and venture building. The firm provides funding for game-changing startups that have been deemed to have high growth potential. Through its incubation program, Living Lab X, LLV provides collaborative support to early-stage startups, helping them succeed from their infancy. In venture building, LLV transforms new business initiatives into fast-growing products that support its core business operations.</p><p>In the past 24 months, LLV has participated in 18 deals, including investments in Jendela360, Amoda, DOOgether, Imajin, and Lingkup. The firm has four Indonesia fintech startups in its portfolio, namely digital financial service Dana, digital mortgage aggregator Ideal, invoicing startup Paper.id and supply chain financing solution provider Kawan Cicil.</p><h3>Iterative<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:75,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/Iterative-300x75.webp&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/Iterative-300x75.webp" width="300" height="75"><figcaption class="attachment__caption"></figcaption></figure></h3><p>Iterative, based in Singapore, is a dedicated accelerator focusing exclusively on Southeast Asia. Founded by the cofounders of Decide.com (acquired by eBay), Iterative <a href="https://www.linkedin.com/school/iterativevc/"><span style="text-decoration: underline;">differentiates</span></a> itself with partners, mentors, advisors, and investors who have all previously started, sold, and operated startups. Iterative’s mission is to build the strongest and most supportive network in the region for early stage founders.</p><p>Iterative <a href="https://www.iterative.vc/post/iterative-closes-55m-fund-ii-to-back-100-more-companies-with-up-to-500k-usd"><span style="text-decoration: underline;">invests</span></a> US$150,000 – US$500,000 in a batch of startups and runs the accelerator twice a year. Upon admission, they invest the full amount then work with the founders closely on their idea for three months. After three months, these startups present their solutions to a select group of investors with the goal of raising a larger round of investment.</p><p>Iterative’s acceleration program focuses on three main activities: investing in early-stage startups, working closely with founders on their business development, and assisting founders with investor relations. This is facilitated through a combination of office hours with Iterative partners, small group sessions, speaker events, a fundraising boot camp, and a demo day attended by over 400 investors.</p><p>Over the past 24 months, Iterative has participated in 18 deals, including investments in Blitz Electric, Momofin, Manuport, Ars, and Zi.Care, according to Tech in Asia. Its <a href="https://www.iterative.vc/companies"><span style="text-decoration: underline;">portfolio</span></a> comprises four Indonesian fintech startups in its portfolio, including artificial intelligence (AI) startup company Finskor, fractional property marketplace Goro, and digital financing agent platform Kentara.</p><h3>Intudo Ventures<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:100,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/Intudo-Ventures.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/Intudo-Ventures.png" width="300" height="100"><figcaption class="attachment__caption"></figcaption></figure></h3><p>Founded in 2017, Intudo Ventures is a VC firm that <a href="https://intudovc.com/manifesto/"><span style="text-decoration: underline;">invests</span></a> exclusively in Indonesia. Backed by Silicon Valley expertise and an established network of experienced global institutions and Indonesian family conglomerates, Intudo has a demonstrated record of successfully making highly concentrated bets in Indonesia.</p><p>This approach is supported by our hyper-local familiarity and capability to provide support in Indonesia, which in turn has positioned Intudo as a trusted gateway to Indonesia for global investors. The firm acts as the “Indonesia beachhead” strategy for dozens of leading institutions, VCs, private equity (PE), hedge funds, and family offices from the US, North Asia, and Southeast Asia and supports the digital transformation strategy of dozens of leading Indonesian conglomerates.</p><p>Over the past 24 months, Intudo has made 12 deals, with recent investments including Jago Coffee, Jala, Alami Sharia, Slice Group, and Coldspace, according to Tech in Asia. It has four fintech startups in its <a href="https://intudovc.com/portfolio/"><span style="text-decoration: underline;">portfolio</span></a>, namely crypto exchange Pintu, payment gateway and unicorn startup Xendit, property transaction platform Pinhome, and Islamic mobile banking app Hijra Bank.</p><h3>MDI Ventures<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:80,&quot;url&quot;:&quot;https://fintechnews.sg/wp-content/uploads/2024/05/MDI-Ventures-300x80.png&quot;,&quot;width&quot;:300}" data-trix-content-type="image" class="attachment attachment--preview"><img src="https://fintechnews.sg/wp-content/uploads/2024/05/MDI-Ventures-300x80.png" width="300" height="80"><figcaption class="attachment__caption"></figcaption></figure></h3><p>MDI Ventures, headquartered in Jakarta, is a <a href="https://mdi.vc/about"><span style="text-decoration: underline;">multi-stage VC firm</span></a> backed by Telkom Indonesia with offices in Indonesia, Singapore, and the US, and extended offices in Europe and South Korea. Since 2016, MDI Ventures has been trusted in managing multiple funds and has invested in over 80+ companies across 12 countries.</p><p>MDI Ventures <a href="https://mdi.vc/about"><span style="text-decoration: underline;">manages</span></a> a variety of funds, contributing to all stages of investment to maintain efficiency and ensure no opportunities are overlooked. Beyond managing its own funds, MDI Ventures also handles investments from third-party limited partner (LP) investors. This unique approach allows MDI Ventures to create new business opportunities and revenue streams through collaborations between the startups it invests in and its anchor LP investors, which include major Indonesian corporations such as Telkom and other state-owned enterprises.</p><p>MDI Ventures <a href="https://www.linkedin.com/company/mdiventures/"><span style="text-decoration: underline;">is also mandated</span></a> to manage incubator and accelerator programs, as well as an angel investment network. The initiatives are meant to capture good opportunities as early as possible, and also contribute to building the emerging Indonesian startup ecosystem.</p><p>Over the past 24 months, MDI Ventures has participated in 12 deals, including investments in companies such as Cakap, Good Doctor Technology, Delos, Genexyz, and Legit Group, according to Tech in Asia. The firm has 17 fintech and insurtech startups in its <a href="https://app.dealroom.co/investors/mdi_ventures/portfolio/f/industries/anyof_fintech"><span style="text-decoration: underline;">portfolio</span></a>, including Indonesian startups omnichannel insurtech Qoala, digital signature app Privy, Amartha and Fazz.</p><p><br><br></p><p><br></p>',
                'media_url' => '',
                'media_source_url' => 'https://fintechnews.sg/96537/indonesia/top-8-fintech-investor-indonesia/',
                'status' => 'published',
                'front_image' => 'blog-images/01JMGX9ZTYKYS921YEQHTWQK40.jpg',
                'headline_image' => 'blog-images/01JMGX9ZTYKYS921YEQHTWQK40.jpg',
                'featured_image' => '',
                'author_name' => 'Fintech News SG',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2025-02-18 12:28:00',
                'blog_category_id' => 1
            ],
            [
                'title' => 'MCI Tuntaskan Program Zenith Accelerator Melalui Graduation Day',
                'slug' => 'mci-tuntaskan-program-zenith-accelerator-melalui-graduation-day',
                'content_heading' => '<p>Jakarta - PT Mandiri Capital Indonesia (MCI) menggelar acara puncak Zenith Graduation Day sebagai penutup dari serangkaian program Zenith Accelerator Batch Pertama.</p>',
                'is_content_justified' => false,
                'content' => '<p>Setelah menjalani mentoring, synergy creation dan acceleration selama empat bulan, program Zenith Accelerator dari MCI ditutup dengan Graduation Day. Program ini diikuti oleh 6 startup terpilih di bidang yang berbeda yakni Rekosistem, Lifepack, Fishlog, Praktis, AI Rudder, dan Imajin.</p><p><br><br></p>',
                'media_url' => '',
                'media_source_url' => '',
                'status' => 'draft',
                'front_image' => '',
                'headline_image' => '',
                'featured_image' => '',
                'author_name' => 'Detik Finance',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2025-02-18 12:27:00',
                'blog_category_id' => 1
            ],
            [
                'title' => 'Mandiri Capital Indonesia Perkuat Ekosistem Startup Fintech',
                'slug' => 'mandiri-capital-indonesia-perkuat-ekosistem-startup-fintech',
                'content_heading' => '<p><strong>JAKARTA, investor.id</strong> – PT Mandiri Capital Indonesia (MCI) menggandeng Saison International dan Saison Capital memperkuat ekosistem <em>startup fintech</em> di Indonesia.</p>',
                'is_content_justified' => false,
                'content' => '<p>Direktur Utama Mandiri Capital Indonesia Ronald Simorangkir mengatakan saat ini dibutuhkan sinergi yang kuat antara institusi keuangan dan <em>startup fintech</em> yang terus berkembang. Seiring dengan perkembangan industri <em>fintech</em> global, terlihat adanya disrupsi yang signifikan di berbagai sektor, mulai dari perbankan hingga investasi.</p><p>"Di sinilah peran penting regulasi dan inovasi harus seimbang. Kami di MCI berkomitmen untuk memfasilitasi kemitraan yang memungkinkan kolaborasi antara <em>fintech</em> dan bank, demi menciptakan solusi keuangan yang inklusif dan berkelanjutan," kata Ronald dalam keterangan rilisnya dikutip Jumat (13/9/2024).</p><p>Salah satu upaya Mandiri Capital Indonesia untuk memperkuat ekosistem <em>startup fintech</em> di Tanah Air yakni berkolaborasi dengan Saison International dan Saison Capital untuk menggelar konferensi <em>fintech</em> bertajuk \'On The Axis: Reinventing Finance\'.</p><p>"Dihadiri oleh pelaku industri, regulator, pemimpin korporasi, investor, serta <em>startup</em>, konferensi ini menegaskan pentingnya sinergi antara institusi perbankan dan startup <em>fintech</em> yang terus berkembang," jelas Ronald.</p><p>Saison International dan Saison Capital merupakan bagian dari Credit Saison, salah satu lembaga keuangan non-bank terbesar di Jepang dengan sejarah lebih dari 70 tahun, yang terdaftar di Bursa Efek Tokyo.</p><p>CEO Saison International Kosuke Mori menambahkan meskipun industri keuangan Indonesia sangat dinamis dan terus berkembang, satu hal yang pasti adalah potensi pertumbuhan yang sangat besar. Ia menjelaskan Saison International telah hadir di Indonesia sejak tahun 2015, dan berada di sini untuk jangka panjang.</p><p>"Bagi kami, mendorong kolaborasi di seluruh ekosistem keuangan dan bekerja sama untuk mendorong kemitraan yang kuat merupakan kunci untuk membuka potensi ini serta mendukung pengembangan ekosistem keuangan yang lebih inklusif, mudah diakses, dan tangguh di Indonesia," jelasnya.</p><p>Dengan transformasi digital yang semakin mempercepat perubahan di sektor keuangan, kolaborasi antara <em>startup fintech</em>, institusi perbankan, dan regulator menjadi kunci untuk menjaga stabilitas sambil mendorong inovasi berkelanjutan.</p><p>Konferensi ini akan membahas berbagai topik utama, termasuk perkembangan terkini dalam <em>fintech</em>, kemitraan strategis antara lembaga keuangan dan <em>startup</em>, strategi untuk kolaborasi yang efektif, serta upaya membangun masa depan kemitraan <em>fintech</em> yang kuat.</p><p>Acara ini dirancang sebagai platform diskusi mendalam mengenai ekosistem fintech, tantangan dan kisah sukses kerjasama antara institusi keuangan dan startup, serta strategi yang efektif untuk membangun ekosistem keuangan yang lebih tangguh dan kuat.</p><p>Selain itu, acara ini juga akan mengeksplorasi potensi teknologi baru seperti kecerdasan buatan (AI), <em>blockchain</em>, <em>open banking</em>, serta pendekatan inovatif dalam menjembatani kesenjangan keuangan di seluruh Asia.</p>',
                'media_url' => '',
                'media_source_url' => 'https://investor.id/finance/373426/mandiri-capital-indonesia-perkuat-ekosistem-startup-fintech',
                'status' => 'published',
                'front_image' => 'blog-images/01JMGZ6Y0YH8914DFGKAJK1X3E.jpg',
                'headline_image' => 'blog-images/01JMGZ6Y0YH8914DFGKAJK1X3E.jpg',
                'featured_image' => '',
                'author_name' => 'Investor ID',
                'author_title' => '',
                'author_image' => '',
                'meta_title' => '',
                'meta_description' => '',
                'published_at' => '2024-09-13 13:01:00',
                'blog_category_id' => 1
            ],

        ];

        foreach ($posts as $postData) {

            $post = BlogPost::updateOrCreate(
                $postData
            );
        }
    }
}
