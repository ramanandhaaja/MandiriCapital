<?php

namespace Database\Seeders;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Annual Report'],
            ['name' => 'Sustainability'],
            ['name' => 'Whitepaper'],
        ];

        $categoryIds = [];
        foreach ($categories as $category) {
            $slug = Str::slug($category['name']);
            $createdCategory = PublicationCategory::updateOrCreate(
                ['slug' => $slug],
                array_merge($category, ['slug' => $slug])
            );
            $categoryIds[] = $createdCategory->id;
        }

        $publications = [
            [
                'title' => 'SME Empowerment',
                'content' => 'Artificial Intelligence continues to revolutionize industries across the globe, fundamentally changing how we live and work. Recent advancements in machine learning algorithms and neural networks have opened up unprecedented possibilities in areas such as healthcare, finance, and autonomous systems. Deep learning models are now capable of processing and analyzing vast amounts of data with remarkable accuracy, leading to breakthroughs in medical diagnosis, drug discovery, and personalized treatment plans. In the financial sector, AI-powered systems are transforming risk assessment, fraud detection, and algorithmic trading strategies. The emergence of large language models has revolutionized natural language processing, enabling more natural human-computer interactions and automated content generation. However, these developments also raise important ethical considerations regarding privacy, bias, and accountability. As AI systems become more sophisticated, ensuring transparent and responsible development becomes crucial. Industry leaders and researchers are actively working on frameworks for ethical AI deployment, focusing on fairness, interpretability, and human oversight. The next decade is expected to bring even more dramatic advances, with potential breakthroughs in quantum computing, edge AI, and artificial general intelligence. Organizations must prepare for this AI-driven future by investing in infrastructure, talent, and ethical guidelines to harness these technologies effectively while managing associated risks.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28PN8QXA5CM26FG666HRFP.png',
                'publication_category_id' => $categoryIds[0],
            ],
            [
                'title' => 'SUSTAINABILITY REPORT 2023',
                'content' => 'Climate change represents one of the most pressing challenges facing our planet today, with far-reaching implications for ecosystems, economies, and human societies. Global temperatures continue to rise at an unprecedented rate, driven primarily by greenhouse gas emissions from human activities. The effects are already visible worldwide: rising sea levels threaten coastal communities, extreme weather events become more frequent and severe, and biodiversity loss accelerates at an alarming rate. Arctic ice sheets are melting faster than predicted, potentially triggering feedback loops that could accelerate warming. Ocean acidification threatens marine ecosystems, particularly coral reefs that support countless species and provide coastal protection. Agricultural systems face disruption from changing precipitation patterns and temperature extremes, raising concerns about food security. The economic impact is equally significant, with industries from insurance to agriculture facing mounting climate-related risks. However, there are reasons for hope. Renewable energy technologies are becoming increasingly cost-competitive, with solar and wind power leading the transition to clean energy. Innovation in electric vehicles and energy storage solutions is accelerating the shift away from fossil fuels. Countries worldwide are strengthening their commitments to emissions reduction, though experts argue more ambitious action is needed. Businesses are increasingly incorporating climate risks into their strategic planning and investing in sustainable practices. The challenge now lies in accelerating these positive trends while ensuring a just transition that addresses social equity concerns.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28Q0N4ZGABCCKKQHW9J6VT.png',
                'publication_category_id' => $categoryIds[0],
            ],
            [
                'title' => 'Unicorn & Centaurs Collaboration with Financial Institutions',
                'content' => 'Unicorn & Centaurs Collaboration with Financial Institutions',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28QBBH37FVZV47WRNEY3A0.jpeg',
                'publication_category_id' => $categoryIds[2],
            ],
            [
                'title' => '2024 Annual Startup Trend Report',
                'content' => 'The global startup ecosystem has undergone remarkable transformation in recent years, characterized by unprecedented levels of innovation, investment, and market disruption. Technology startups, in particular, have emerged as powerful drivers of economic growth and social change, leveraging digital technologies to solve complex problems and create new market opportunities. The democratization of technology, coupled with increased access to capital through venture funding and alternative financing methods, has lowered barriers to entry for entrepreneurs worldwide. Cloud computing, artificial intelligence, and mobile technologies have enabled startups to scale rapidly and efficiently, often with minimal initial infrastructure investment. The COVID-19 pandemic has accelerated digital transformation across industries, creating new opportunities for innovative startups in areas such as remote work solutions, digital health, and e-commerce. Venture capital investment has reached record levels, with investors showing particular interest in fintech, healthtech, and sustainability-focused startups. However, the startup landscape also faces significant challenges. Increased competition for talent, rising customer acquisition costs, and regulatory complexities require careful navigation. Successful startups increasingly focus on sustainable growth models rather than pure user acquisition, emphasizing unit economics and path to profitability. The importance of strong corporate governance and risk management has also grown as startups mature and face greater scrutiny from stakeholders.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28QNJNNP0QAVS65FPTBJSZ.jpeg',
                'publication_category_id' => $categoryIds[0],
            ],
            [
                'title' => 'Developing Constructive Collaboration to Achieve Productive Innovation',
                'content' => 'The fiscal year 2023 marked a significant period of growth and transformation for our organization, characterized by strategic initiatives, operational excellence, and strong financial performance. Despite challenging macroeconomic conditions, we achieved remarkable results across key performance indicators. Revenue grew by 15% year-over-year, driven by expansion in our core markets and successful penetration of new segments. Operating margins improved by 200 basis points, reflecting operational efficiencies and strategic cost management initiatives. Our digital transformation program delivered substantial improvements in customer experience and operational efficiency, with digital channels now accounting for 45% of total transactions. Investment in research and development remained a priority, with several innovative products launched during the year. Sustainability initiatives made significant progress, with a 25% reduction in carbon emissions and implementation of comprehensive ESG frameworks across operations. Our workforce grew by 10%, while maintaining high engagement scores and industry-leading retention rates. Strategic acquisitions in key markets strengthened our competitive position and expanded our technological capabilities. Looking ahead, we remain focused on sustainable growth, digital innovation, and creating value for all stakeholders. The board has approved an ambitious three-year strategic plan emphasizing technological innovation, market expansion, and sustainability initiatives.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28R3F8JS68095E6K4AKP4Z.jpeg',
                'publication_category_id' => $categoryIds[2],
            ],
            [
                'title' => 'Strength Sustainability Innovation',
                'content' => 'Our fourth quarter sustainability initiatives demonstrated significant progress toward our environmental and social impact goals, reflecting our commitment to responsible business practices and sustainable development. Environmental performance showed marked improvement, with greenhouse gas emissions reduced by 18% compared to the previous quarter through implementation of energy-efficient technologies and renewable energy adoption. Water conservation efforts yielded a 15% reduction in consumption through process optimization and recycling initiatives. Waste management programs achieved an 80% recycling rate, with zero waste to landfill achieved at three major facilities. Social impact initiatives reached new milestones, with community investment programs benefiting over 50,000 individuals through education and skills development programs. Supplier diversity initiatives exceeded targets, with 35% of procurement spend directed to minority-owned businesses. Employee development programs saw record participation, with average training hours per employee increasing by 25%. Our sustainable product innovation pipeline expanded significantly, with eco-friendly products now representing 40% of new product development. Stakeholder engagement strengthened through regular dialogue sessions and transparent reporting mechanisms. Governance frameworks were enhanced with the establishment of a dedicated sustainability committee and implementation of comprehensive ESG risk assessment protocols. These achievements position us well for continued progress in sustainable business practices.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28RJDXGCF1MNAQTAFFPT41.jpeg',
                'publication_category_id' => $categoryIds[1],
            ],
            [
                'title' => 'Start-Up Report 2023',
                'content' => 'Our fourth quarter sustainability initiatives demonstrated significant progress toward our environmental and social impact goals, reflecting our commitment to responsible business practices and sustainable development. Environmental performance showed marked improvement, with greenhouse gas emissions reduced by 18% compared to the previous quarter through implementation of energy-efficient technologies and renewable energy adoption. Water conservation efforts yielded a 15% reduction in consumption through process optimization and recycling initiatives. Waste management programs achieved an 80% recycling rate, with zero waste to landfill achieved at three major facilities. Social impact initiatives reached new milestones, with community investment programs benefiting over 50,000 individuals through education and skills development programs. Supplier diversity initiatives exceeded targets, with 35% of procurement spend directed to minority-owned businesses. Employee development programs saw record participation, with average training hours per employee increasing by 25%. Our sustainable product innovation pipeline expanded significantly, with eco-friendly products now representing 40% of new product development. Stakeholder engagement strengthened through regular dialogue sessions and transparent reporting mechanisms. Governance frameworks were enhanced with the establishment of a dedicated sustainability committee and implementation of comprehensive ESG risk assessment protocols. These achievements position us well for continued progress in sustainable business practices.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28RXFYS9PNZD65C8JWNBVG.jpeg',
                'publication_category_id' => $categoryIds[0],
            ],
            [
                'title' => 'CATALYZING SUSTAINABILITY IMPACT IN INDONESIA - IMPACT REPORT 2023',
                'content' => 'Our fourth quarter sustainability initiatives demonstrated significant progress toward our environmental and social impact goals, reflecting our commitment to responsible business practices and sustainable development. Environmental performance showed marked improvement, with greenhouse gas emissions reduced by 18% compared to the previous quarter through implementation of energy-efficient technologies and renewable energy adoption. Water conservation efforts yielded a 15% reduction in consumption through process optimization and recycling initiatives. Waste management programs achieved an 80% recycling rate, with zero waste to landfill achieved at three major facilities. Social impact initiatives reached new milestones, with community investment programs benefiting over 50,000 individuals through education and skills development programs. Supplier diversity initiatives exceeded targets, with 35% of procurement spend directed to minority-owned businesses. Employee development programs saw record participation, with average training hours per employee increasing by 25%. Our sustainable product innovation pipeline expanded significantly, with eco-friendly products now representing 40% of new product development. Stakeholder engagement strengthened through regular dialogue sessions and transparent reporting mechanisms. Governance frameworks were enhanced with the establishment of a dedicated sustainability committee and implementation of comprehensive ESG risk assessment protocols. These achievements position us well for continued progress in sustainable business practices.',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28SCER12ZTVZD5C0QCJPDJ.png',
                'publication_category_id' => $categoryIds[1],
            ],
        ];

        foreach ($publications as $publication) {
            $slug = Str::slug($publication['title']);

            Publication::updateOrCreate(
                ['slug' => $slug],
                array_merge($publication, [
                    'slug' => $slug,
                    'created_at' => $publication['published_date'],
                    'updated_at' => $publication['published_date']
                ])
            );
        }
    }
}
