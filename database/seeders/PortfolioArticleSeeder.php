<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First Article - Why MCI
        $firstArticleId = DB::table('portfolio_articles')->insertGetId([
            'title' => 'Why MCI',
            'content' => '',  // This section appears to only have a title in the screenshot
            'title_sub' => '',
            'content_sub' => '',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-articles for Why MCI
        DB::table('portfolio_articles_sub')->insert([
            [
                'article_id' => $firstArticleId,
                'title' => "Diverse Opportunities Within Mandiri Group",
                'content' => 'With Mandiri Group’s extensive business ecosystem, startups gain unparalleled access to a wide range of sectors that allows you to explore synergies, scale your solutions, and tap into endless growth opportunities.',
                'icon' => 'portfolios/01JHFA4PAR27040W6Q0V29TRMM.png',
                'text_icon' => '',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $firstArticleId,
                'title' => 'Expert Guidance and Mentorship',
                'content' => "We don't just invest; we partner with you on your journey. MCI provides tailored guidance, strategic mentorship, and access to industry expertise to help your startup overcome challenges and unlock its full potential.",
                'icon' => 'portfolios/01JHFA58K19B6J9T4D8HNW1XCE.png',
                'text_icon' => '',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $firstArticleId,
                'title' => 'Focus on ESG Impact',
                'content' => 'We actively champion on ESG initiatives, ensuring that your startup can grow responsibly while making a positive on society and the environment.',
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Second Article - Here's how we'll help
        $secondArticleId = DB::table('portfolio_articles')->insertGetId([
            'title' => "Here's how we'll help you achieve that growth",
            'content' => '"At Mandiri Capital Indonesia, we believe in investing in businesses, not just funding rounds. This means we\'re here to support you throughout your journey—from the spark of an idea to scaling into a successful, impactful enterprise.\n\nAs part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you grow and thrive at every stage."',
            'title_sub' => '',
            'content_sub' => '',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-articles for second article
        DB::table('portfolio_articles_sub')->insert([
            [
                'article_id' => $secondArticleId,
                'title' => "Tailored Value Creation Programs",
                'content' => 'We’ve designed programs like Sandbox, Matchmaking, and Networking to provide startups with structured opportunities to test ideas, forge meaningful connections, and access new markets. These initiatives are designed to create tangible impact and drive measurable growth.',
                'icon' => 'portfolios/01JHFA4PAR27040W6Q0V29TRMM.png',
                'text_icon' => '',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => 'Sector-Focused Expertise',
                'content' => 'Our priority sectors align with high-growth opportunities, offering startups the added value of deep industry insights and tailored support. By focusing on these areas, we help you leverage your strengths and scale effectively.',
                'icon' => 'portfolios/01JHFA58K19B6J9T4D8HNW1XCE.png',
                'text_icon' => '',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => 'Strategic Growth Support',
                'content' => 'Throughout the investment period, we offer hands-on support, strategic insights, and access to industry experts. Our goal is to help you overcome challenges, optimize your strategies, and scale your business effectively.',
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => 'Access to a Global Network',
                'content' => 'Tap into a vast network of investors, venture capitalists, private equities, and potential acquiring companies. We don’t just invest—we prepare you to be the next big player in the market, positioning you as a pipeline for global opportunities.',
                'icon' => 'portfolios/01JHFA5QMN3WW6YRSXFSQGBE8Z.png',
                'text_icon' => '',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /*
        // Third Article - Investment Process
        $thirdArticleId = DB::table('portfolio_articles')->insertGetId([
            'title' => 'What are we currently looking for?',
            'content' => '',  // This section appears to only have a title
            'title_sub' => 'Are you innovating in any of these industries? ',
            'content_sub' => 'Send your business proposal and join us in shaping the future of these sectors!',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-articles for Investment Process
        DB::table('portfolio_articles_sub')->insert([
            [
                'article_id' => $thirdArticleId,
                'title' => 'Embedded Finance',
                'content' => 'Harness the power of AI to drive cost efficiency and increase productivity with solutions that include generative AI, knowledge management systems, data management and personalization.',
                'icon' => '',
                'text_icon' => '01',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => 'Health & Wellness',
                'content' => 'Elevates well-being with holistic products and dynamic wellness solutions that empower employees through personal development and lifestyle enhancement.',
                'icon' => '',
                'text_icon' => '02',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => 'Wealth Management',
                'content' => 'Offers innovative, tailored solutions to empower high-net-worth clients with cutting-edge, personalized solutions to maximize and leverage their wealth.',
                'icon' => '',
                'text_icon' => '03',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => 'Financial Technology',
                'content' => 'Revolutionize financial services with tech-driven solutions like SaaS platforms, online payments, and cash collection systems to enhance efficiency and user experience.',
                'icon' => '',
                'text_icon' => '04',
                'order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => 'Value Chain Enabler',
                'content' => 'Leverage the ecosystem with cross-product opportunities across sectors such as lifestyle, FMCG, health, education, cash collection, and transportation, fostering collaboration and growth.',
                'icon' => '',
                'text_icon' => '05',
                'order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $thirdArticleId,
                'title' => 'Property Tech & Asset Management',
                'content' => 'Enhances efficiency and financial recovery with smart solutions for distressed asset liquidation, product bundling for wealth customers, and idle asset management.',
                'icon' => '',
                'text_icon' => '06',
                'order' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]); */
    }
}
