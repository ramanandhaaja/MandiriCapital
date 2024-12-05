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
                'title' => 'The Future of Venture Capital in Indonesia',
                'content_heading' => 'Exploring the dynamic evolution of Indonesia\'s venture capital landscape and its impact on the startup ecosystem in Southeast Asia\'s largest economy.',
                'content' => '<p>Indonesia\'s venture capital landscape is experiencing unprecedented growth, driven by technological advancement and supportive regulations. The ecosystem has matured significantly, with investments reaching record levels across various sectors.</p>

<p>Key trends shaping the industry:</p>
<ul>
    <li>Rising fintech adoption and digital banking solutions</li>
    <li>E-commerce growth and logistics innovation</li>
    <li>Healthcare technology advancement</li>
    <li>Enterprise digital transformation</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/venture-capital-indonesia',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MASF3DHAWMV6PPQQGJEDR.png',
                'meta_title' => 'The Future of VC in Indonesia | Mandiri Capital',
                'meta_description' => 'Discover the latest trends and opportunities in Indonesia\'s venture capital landscape.',
                'published_at' => now(),
            ],
            [
                'title' => 'Digital Banking Revolution in Southeast Asia',
                'content_heading' => 'Understanding the transformation of banking services through digital innovation and changing consumer preferences in Southeast Asia.',
                'content' => '<p>The digital banking sector in Southeast Asia is undergoing rapid transformation, reshaping how financial services are delivered and accessed. This evolution is driven by technological innovation and changing consumer behavior.</p>

<p>Major developments include:</p>
<ul>
    <li>Rise of digital-only banks</li>
    <li>Enhanced mobile banking services</li>
    <li>AI-powered financial solutions</li>
    <li>Open banking initiatives</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/digital-banking-sea',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MYD6ZE2FT6PVNZQWY8ZFB.png',
                'meta_title' => 'Digital Banking in SEA | Mandiri Capital',
                'meta_description' => 'Explore the digital banking revolution in Southeast Asia and its impact on the financial sector.',
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Sustainable Investment: The Rise of ESG in Indonesia',
                'content_heading' => 'Examining how ESG factors are reshaping investment decisions and corporate practices in Indonesia\'s evolving business landscape.',
                'content' => '<p>Environmental, Social, and Governance (ESG) considerations are becoming increasingly important in Indonesian investment decisions. This shift reflects growing awareness of sustainability challenges and responsible business practices.</p>

<p>Key aspects include:</p>
<ul>
    <li>Environmental responsibility and carbon reduction</li>
    <li>Social impact measurement</li>
    <li>Corporate governance improvements</li>
    <li>Sustainable product development</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/esg-investment-indonesia',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MYR04TXRXRD1N784KWYGQ.png',
                'meta_title' => 'ESG Investment in Indonesia | Mandiri Capital',
                'meta_description' => 'Understanding the growing importance of ESG in Indonesian investment landscape.',
                'published_at' => now()->subDays(14),
            ],
            [
                'title' => 'Emerging Technologies Shaping Financial Services',
                'content_heading' => 'Analyzing the impact of blockchain, AI, and open banking on the future of financial services delivery.',
                'content' => '<p>New technologies are revolutionizing financial services, creating opportunities for innovation and improved service delivery. These advancements are transforming traditional banking models and customer experiences.</p>

<p>Key technologies:</p>
<ul>
    <li>Blockchain and distributed ledger technology</li>
    <li>AI and machine learning applications</li>
    <li>Open banking APIs</li>
    <li>Cloud computing solutions</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/fintech-innovations',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MZ1WYHC7KJ96FG7VWR9NA.png',
                'meta_title' => 'Financial Technology Trends | Mandiri Capital',
                'meta_description' => 'Discover the latest technological innovations in financial services.',
                'published_at' => now()->subDays(21),
            ],
            [
                'title' => 'The Growth of E-commerce in Indonesia',
                'content_heading' => 'Exploring the rapid expansion of Indonesia\'s e-commerce sector and its impact on retail and digital payments.',
                'content' => '<p>Indonesia\'s e-commerce sector shows remarkable growth, driven by increasing internet penetration and changing consumer preferences. This digital transformation is creating new opportunities across the retail landscape.</p>

<p>Growth factors:</p>
<ul>
    <li>Digital payment adoption</li>
    <li>Mobile-first consumer approach</li>
    <li>Improved logistics networks</li>
    <li>Rising middle-class consumption</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/indonesia-ecommerce-growth',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MZBHHK8SC5NQK7WRZ94B7.png',
                'meta_title' => 'E-commerce Growth in Indonesia | Mandiri Capital',
                'meta_description' => 'Insights into Indonesia\'s rapidly expanding e-commerce market.',
                'published_at' => now()->subDays(28),
            ],
            [
                'title' => 'Innovation in Islamic Finance',
                'content_heading' => 'Discovering how technology is transforming Islamic financial services while maintaining Shariah compliance principles.',
                'content' => '<p>Islamic finance is embracing digital transformation, making Shariah-compliant services more accessible and efficient. This evolution combines traditional Islamic principles with modern financial technology.</p>

<p>Key innovations:</p>
<ul>
    <li>Digital Sukuk platforms</li>
    <li>Islamic fintech solutions</li>
    <li>Automated Shariah compliance</li>
    <li>Blockchain applications</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/islamic-finance-innovation',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6MZMMS0V31D5DWFJCJBC9A.png',
                'meta_title' => 'Islamic Finance Innovation | Mandiri Capital',
                'meta_description' => 'Exploring technological innovation in Islamic financial services.',
                'published_at' => now()->subDays(35),
            ],
            [
                'title' => 'Building Resilient Startups in Uncertain Times',
                'content_heading' => 'Learning essential strategies for startup sustainability and growth during challenging economic conditions.',
                'content' => '<p>Economic uncertainty requires startups to focus on building resilient business models. Success depends on efficient resource management and adaptable strategies.</p>

<p>Key strategies:</p>
<ul>
    <li>Efficient capital allocation</li>
    <li>Revenue diversification</li>
    <li>Operational flexibility</li>
    <li>Risk management practices</li>
</ul>',
                'media_url' => 'https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator',
                'media_source_url' => 'https://source.example.com/startup-resilience',
                'status' => 'published',
                'featured_image' => 'blog-images/01JE6N03YER12FMN2ZF10M113N.png',
                'meta_title' => 'Startup Resilience Guide | Mandiri Capital',
                'meta_description' => 'Learn how startups can build resilience in uncertain economic conditions.',
                'published_at' => now()->subDays(42),
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
                    'blog_category_id' => BlogCategory::inRandomOrder()->first()->id,
                ])
            );

            // Detach existing tags first to prevent duplicates
            $blogPost->tags()->detach();

            // Attach 2-4 random tags
            $randomTags = BlogTag::inRandomOrder()
                ->take(rand(2, 4))
                ->get()
                ->pluck('id')
                ->toArray();

            $blogPost->tags()->attach($randomTags);
        }
    }
}
