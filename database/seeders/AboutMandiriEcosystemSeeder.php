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
                'content' => "Indonesia's largest Syariah bank recognized internationally with a presence in Dubai and the UAE that connect Indonesia to the global Islamic finance market.",
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTS5N5K8AHECTBRKX10FE1.png',
                'is_domestic' => true,
                'is_international' => true,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."
            ],
            [
                'title' => 'Pension Fund Management Services',
                'slug' => 'mandiri-taspen',
                'content' => 'Specializes in pension fund management, offering financial products and services to ensure the well-being of retirees in Indonesia. It operates a wide network of branches across the country.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTNVPKQD0N621GGTY5R0C.png',
                'is_domestic' => true,
                'is_international' => false,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Best Investment Bank in Indonesia',
                'slug' => 'mandiri-sekuritas',
                'content' => 'A leading Indonesian investment bank since 2000, offering securities brokerage, underwriting, and financial advisory services. Recognized as the Best Investment Bank in Indonesia, it also has a regional presence with branch in Singapore.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTTZYZM9YBGCASSBMDGTJP.png',
                'is_domestic' => true,
                'is_international' => true,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Financing Automotive Sector (New and Fleet)',
                'slug' => 'mandiri-tunas-finance',
                'content' => 'Financing automotive sector (new and fleet) | Domestic A leading multifinance company providing innovative automotive financing for both brand-new and pre-owned vehicles, fleet solutions, and multipurpose loans through a nationwide network.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTW3ADGR8FY1WEQ2ETE1HV.png',
                'is_domestic' => true,
                'is_international' => false,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Financing Solutions for Used Automotive',
                'slug' => 'mandiri-utama-finance',
                'content' => 'Provides financing solutions for used automotive, that focuses on pre-owned vehicle market and cater financing needs for individuals and businesses looking to purchase second-hand vehicles.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTWDRP4W79YFMG8CHV5F9S.png',
                'is_domestic' => true,
                'is_international' => false,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Cross-Border Remittance Services',
                'slug' => 'mandiri-remittance',
                'content' => 'Mandiri International Remittance (MIR) provides efficient and reliable cross-border remittance services, facilitating seamless international money transfers to meet diverse transaction needs.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYKEBH2BN0T93NXZG6W99.png',
                'is_domestic' => true,
                'is_international' => true,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Expansion Into Insurance Sector',
                'slug' => 'axa-mandiri',
                'content' => 'A joint venture between Bank Mandiri and AXA SA, offering life, health, and financial protection insurance products. With a strong presence in Indonesia, it provides tailored coverage to meet individual and corporate needs.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTYZK8F3K03EZ16098AAAD.png',
                'is_domestic' => true,
                'is_international' => true,
                'created_at' => now(),
                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
            [
                'title' => 'Comprehensive Healthcare Solutions & Insurance Coverage',
                'slug' => 'mandiri-inhealth',
                'content' => 'Provides comprehensive healthcare and insurance solutions, including life, health, and accident coverage for individuals and corporations to support overall wellness.',
                'published_date' => Carbon::now(),
                'image_path' => 'our-identity/01JHDTZY02VGQK0HGBEHNCVWV8.png',
                'is_domestic' => true,
                'is_international' => false,
                'created_at' => now(),

                'hover_focus_area' => 'Startups offering Syariah-compliant financial technology, digital banking solutions, Islamic wealth management tools, or trade finance systems.',
                'hover_content' => "Alignment with Syariah Principles: Compliance with Islamic finance regulations and ethical standards.
                                    -Technological Innovation: Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.
                                    - Market Potential: Scalable business models targeting the Islamic finance sector locally and internationally.
                                    - Synergy Readiness: Ability to integrate with BSI ecosystem, including retail and corporate banking services.
                                    - ESG Commitment: Promoting ethical and sustainable finance aligned with Syariah values."

            ],
        ];

        foreach ($datas as $data) {
            AboutMandiriEcosystem::create($data);
        }
    }
}
