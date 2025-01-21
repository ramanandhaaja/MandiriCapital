<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioFundingArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Second Article - Here's how we'll help
        $secondArticleId = DB::table('portfolio_funding_articles')->insertGetId([
            'title' => "Dana Ventura",
            'content' => '',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-articles for second article
        DB::table('portfolio_funding_articles_sub')->insert([
            [
                'article_id' => $secondArticleId,
                'title' => "Balance Sheet Fund",
                'content' => 'Berfokus untuk memberikan investasi kepada technology companies “growth startup” yang memiliki potensi kolaborasi dengan ekosistem Mandiri Group.',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQD9T5Z8WB3Q1JT81DRPHK.png',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => "Indonesia Impact Fund (IIF)",
                'content' => "A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund (IIF) is the nation's first private impact investment fund. Focused on early-stage startups advancing the SDGs, IIF is driving Indonesia’s journey toward a brighter, sustainable future.",
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1PV4K9YBV43PRECCA4.png',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => 'BTN Fund',
                'content' => 'In partnership with Bank BTN, Indonesia’s largest mortgage bank, MCI launched the BTN Fund to fuel digital transformation and enhance the digital housing ecosystem. Targeting early to growth-stage startups, this fund focuses on proptech, fintech, SaaS, ESG, and other strategic sectors.',
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1QEJPRMP4HJACSFC5W.png',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'article_id' => $secondArticleId,
                'title' => 'Merah Putih Fund (MPF)',
                'content' => "MCI, together with BRI Ventures, MDI Ventures, Telkomsel Ventures, and BNI Ventures, collaborates on the Merah Putih Fund. This initiative supports growth and late-stage startups, accelerating Indonesia's digital economy through strategic investments and collaborations.",
                'is_large' => false,
                'image_path' => 'portfolios/01JHFQEB1RBGJ9EY8NK5M5A02K.png',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
