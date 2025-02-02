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
                'hover_content' => "<h3>1. Alignment with Syariah Principles</h3><p>Compliance with Islamic finance regulations and ethical standards.&nbsp;</p><h3>2. Technological Innovation</h3><p>Use of AI, blockchain, or big data to enhance Islamic banking services and customer experience.&nbsp;</p><h3>3. Market Potential</h3><p>Scalable business models targeting the Islamic finance sector locally and internationally.&nbsp;</p><h3>4. Synergy Readiness</h3><p>Ability to integrate with BSI ecosystem, including retail and corporate banking services.</p><h3>5. ESG Commitment</h3><p>Promoting ethical and sustainable finance aligned with Syariah values.</p>"
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
                'hover_focus_area' => '<p>Startups specializing in pension-tech, retirement planning, financial literacy platforms, or insurance solutions tailored for retirees.</p>',
                'hover_content' => "<h3>1. Retirement-Centric Solutions</h3><p>Products or platforms that address financial security and well-being for retirees.</p><h3>2. User-Friendly Technology</h3><p>Intuitive tools enhancing retiree financial literacy and access to savings and investments.</p><h3>3. Scalability and Reach</h3><p>Potential to expand services across Indonesia's diverse retiree demographic.</p><h3>4. Compliance and Governance</h3><p>Adherence to pension fund regulations and financial industry standards.</p><h3>5. Synergy Readiness</h3><p>Willingness to collaborate with Mandiri Taspen's network to deliver tailored solutions.</p>"

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
                'hover_focus_area' => '<p>Startups focused on trade finance, cross-border payment systems, treasury management, or solutions that support international business operations.</p>',
                'hover_content' => "<h3>1. Cross-Border Solutions</h3><p>Technologies that simplify trade finance, currency management, and international payments.</p><h3>2. Corporate Banking Support</h3><p>Tools for treasury optimization and business expansion across Europe and Indonesia.</p><h3>3. Regulatory Compliance</h3><p>Adherence to international banking regulations and standards.</p><h3>4. Market Scalability</h3><p>Solutions with potential to expand beyond initial markets, benefiting businesses in Europe and Indonesia.</p><h3>5. Synergy Readiness</h3><p>Capability to integrate with Mandiri Europe's banking services and facilitate cross-border trade.</p><h3>6. Sustainability Focus</h3><p>Supporting ESG initiatives in trade and investment practices.</p>"

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
                'hover_focus_area' => '<p>Startups that enhance investment banking operations, including securities trading, underwriting, financial advisory, or market intelligence.</p>',
                'hover_content' => "<h3>1. Advanced Trading Platforms</h3><p>Solutions for efficient and secure securities brokerage.</p><h3>2. Underwriting Support</h3><p>Technologies that streamline the underwriting process for IPOs or bond issuance.</p><h3>3. Financial Analytics Tools</h3><p>Platforms offering advanced data insights for market analysis and investment strategies.</p><h3>4. Regulatory Compliance</h3><p>Startups with systems that meet financial industry regulations, ensuring secure operations.</p><h3>5. Scalability</h3><p>Solutions that can integrate seamlessly across Mandiri Sekuritas' domestic and regional markets.</p>"

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
                'hover_focus_area' => '<p>Startups specializing in portfolio management, innovative investment tools, or client-focused financial planning platforms.</p>',
                'hover_content' => "<h3>1. Portfolio Optimization</h3><p>Tools to enhance asset allocation and investment performance.</p><h3>2. Client-Focused Solutions</h3><p>Platforms that simplify investment planning and engagement for diverse client needs.</p><h3>3. Technological Innovation</h3><p>Use of AI, machine learning, or big data to create smarter investment products.</p><h3>4. Compliance and Risk Management</h3><p>Systems that ensure adherence to regulations while managing risk effectively.</p><h3>5. Sustainability-Focused Investments</h3><p>Startups supporting ESG-aligned investment strategies or impact-driven financial products.</p>"

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
                'hover_focus_area' => '<p>Startups that enhance automotive financing, vehicle loan solutions, fleet management, or multipurpose financial services.</p>',
                'hover_content' => "<h3>1. Automotive Financing Solutions</h3><p>Technologies for efficient loan processing and risk assessment in the automotive sector.</p><h3>2. Fleet Management Tools</h3><p>Platforms that streamline fleet financing and management for businesses.</p><h3>3. Loan Customization</h3><p>Startups offering personalized or flexible financing options for individuals and businesses.</p><h3>4. Scalability</h3><p>Solutions that can expand nationwide, integrating seamlessly with Mandiri Tunas Finance's network.</p><h3>5. User-Friendly Experience</h3><p>Platforms that simplify the customer journey, from application to loan approval.</p>"

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
                'hover_focus_area' => '<p>Startups that focus on financing for pre-owned vehicles, credit scoring, or solutions tailored to the used car market.</p>',
                'hover_content' => "<h3>1. Pre-Owned Vehicle Financing</h3><p>Platforms that offer tailored loan products for used automotive buyers.</p><h3>2. Credit Scoring and Risk Management</h3><p>Tools that improve credit assessment and reduce risk in used vehicle loans.</p><h3>3. Flexible Financing Options</h3><p>Solutions that cater to both individual buyers and businesses in the second-hand vehicle market.</p><h3>4. Market Penetration</h3><p>Tools that enhance access to financing in the domestic used car sector.</p><h3>5. Seamless Integration</h3><p>Solutions that integrate with existing Mandiri Utama Finance processes for faster loan approvals.</p>"

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
                'hover_focus_area' => '<p>Startups that provide solutions for international money transfers, remittance platforms, payment processing, or financial technologies for cross-border transactions.</p>',
                'hover_content' => "<h3>1. Cross-Border Payment Solutions</h3><p>Technologies that enable seamless, secure, and efficient international money transfers.</p><h3>2. Transaction Speed and Reliability</h3><p>Platforms that optimize remittance speed while ensuring reliable service for users.</p><h3>3. Regulatory Compliance</h3><p>Solutions that meet international financial regulations and ensure secure transfers.</p><h3>4. Scalability</h3><p>Startups with solutions that can easily expand across different regions and integrate with global financial networks.</p><h3>5. User Experience</h3><p>Platforms that prioritize easy-to-use interfaces for both senders and receivers, simplifying the remittance process.</p>"

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
                'hover_focus_area' => '<p>Startups that offer solutions for life insurance, health insurance, financial protection, or technology-driven insurance products and services.</p>',
                'hover_content' => "<h3>1. Insurance Product Innovation</h3><p>Solutions that develop new life, health, or financial protection products to meet evolving customer needs.</p><h3>2. Digital Insurance Platforms</h3><p>Technologies that streamline insurance processes, including policy management, claims, and customer service.</p><h3>3. Personalization</h3><p>Tools that allow for tailored insurance coverage, catering to both individual and corporate needs.</p><h3>4. Regulatory Compliance</h3><p>Platforms that ensure adherence to local and international insurance regulations.</p><h3>5. User Experience</h3><p>Solutions that simplify the customer journey from policy purchase to claims, making it user-friendly and accessible.</p>"

            ],

        ];

        foreach ($datas as $data) {
            AboutMandiriEcosystem::create($data);
        }
    }
}
