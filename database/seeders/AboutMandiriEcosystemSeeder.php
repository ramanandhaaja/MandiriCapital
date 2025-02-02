<?php

namespace Database\Seeders;

use App\Models\AboutMandiriEcosystem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AboutMandiriEcosystemSeeder extends Seeder
{
    public function run(): void
    {

        $datas = [
            [
                'title' => 'The Most Outstanding Bank Syariah',
                'slug' => 'bank-syariah-indonesia',
                'content' => "Provides a full range of Syariah-compliant services, including retail banking, corporate financing, wealth management, and trade finance.",
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTS5N5K8AHECTBRKX10FE1.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Bank',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"
            ],
            [

                'title' => 'Pension Fund Management Services',
                'slug' => 'mandiri-taspen',
                'content' => 'Specializes in pension fund management, offering financial products and services to ensure the well-being of retirees in Indonesia. It operates a wide network of branches across the country.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTNVPKQD0N621GGTY5R0C.png',
                'is_domestic' => true,
                'is_international' => false,
                'group' => 'Bank',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],

            [
                'title' => 'Bank Mandiri’s Subsidiary Headquartered in London',
                'slug' => 'mandiri-europe',
                'content' => 'Focuses on trade finance, treasury management, and corporate banking, supporting Indonesian businesses in Europe.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2Y6PHQP9HSJRK97AHXZCEM.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Bank',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],
            [
                'title' => 'Best Investment Bank in Indonesia',
                'slug' => 'mandiri-sekuritas',
                'content' => 'Provides securities brokerage, underwriting, and financial advisory services, with a regional branch in Singapore.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTZYZM9YBGCASSBMDGTJP.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Investment',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],

            [
                'title' => 'Leading Management Asset in Indonesia',
                'slug' => 'mandiri-investasi',
                'content' => 'Offers innovative investment products like mutual funds and discretionary funds, tailored to diverse financial goals.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JK2Y7HX7CQ95J5APVBH500QY.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Investment',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],
            [
                'title' => 'Financing Automotive Sector (New and Fleet)',
                'slug' => 'mandiri-tunas-finance',
                'content' => 'Offers financing for new and pre-owned vehicles, fleet solutions, and multipurpose loans through a nationwide network.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTW3ADGR8FY1WEQ2ETE1HV.png',
                'is_domestic' => true,
                'is_international' => false,
                'group' => 'Multi-Finance',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],
            [
                'title' => 'Financing Solutions for Used Automotive',
                'slug' => 'mandiri-utama-finance',
                'content' => 'Provides financing solutions for the purchase of pre-owned vehicles for individuals and businesses.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTWDRP4W79YFMG8CHV5F9S.png',
                'is_domestic' => true,
                'is_international' => false,
                'group' => 'Multi-Finance',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],
            [
                'title' => 'Cross-Border Remittance Services',
                'slug' => 'mandiri-remittance',
                'content' => 'Offers efficient and reliable international money transfer services for diverse transaction needs.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYKEBH2BN0T93NXZG6W99.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Remittance',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],
            [
                'title' => 'Expansion Into Insurance Sector',
                'slug' => 'axa-mandiri',
                'content' => 'Provides life, health, and financial protection insurance products, tailored to individual and corporate needs.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYZK8F3K03EZ16098AAAD.png',
                'is_domestic' => false,
                'is_international' => true,
                'group' => 'Insurance',
                'created_at' => now(),
                'hover_focus_area' => '<p>Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.</p>',
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3><strong>2. Technological Innovation</strong></h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3.Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness&nbsp;</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"

            ],

        ];

        foreach ($datas as $data) {
            AboutMandiriEcosystem::create($data);
        }
    }
}
