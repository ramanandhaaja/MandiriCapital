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
            [
                'name' => [
                    'en' => 'Annual & Financial Report',
                    'id' => 'Laporan Tahunan & Keuangan'
                ],
                'slug' => 'annual-and-financial-report',
            ],
            [
                'name' => [
                    'en' => 'Sustainability Report',
                    'id' => 'Laporan Keberlanjutan'
                ],
                'slug' => 'sustainability-report',
            ],
            [
                'name' => [
                    'en' => 'Whitepaper',
                    'id' => 'Dokumen Teknis'
                ],
                'slug' => 'whitepaper',
            ]
        ];

        $categoryIds = [];
        foreach ($categories as $category) {
            $createdCategory = PublicationCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
            $categoryIds[] = $createdCategory->id;
        }

        $publications = [
            [
                'title' => 'Developing Constructive Collaboration to achieve productive innovation',
                'content' => 'Developing Constructive Collaboration to achieve productive innovation',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28PN8QXA5CM26FG666HRFP.png',
                'publication_category_id' => $categoryIds[0],
            ],
            [
                'title' => 'Strengthening Sustainability Innovation',
                'content' => 'Strengthening Sustainability Innovation',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28Q0N4ZGABCCKKQHW9J6VT.png',
                'publication_category_id' => $categoryIds[1],
            ],
            [
                'title' => 'Catalyzing Sustainable Growth : Out Commitment to Efficiency, community, and ESG',
                'content' => 'Catalyzing Sustainable Growth : Out Commitment to Efficiency, community, and ESG',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28QBBH37FVZV47WRNEY3A0.jpeg',
                'publication_category_id' => $categoryIds[1],
            ],
            [
                'title' => 'To Protect and Preserve Sustainability with Asset Optimization',
                'content' => 'To Protect and Preserve Sustainability with Asset Optimization',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28QNJNNP0QAVS65FPTBJSZ.jpeg',
                'publication_category_id' => $categoryIds[1],
            ],
            [
                'title' => 'The Billion Dollar Moment :  A Paradigm Shift for Indonesia IPOs',
                'content' => 'The Billion Dollar Moment :  A Paradigm Shift for Indonesia IPOs',
                'published_date' => Carbon::createFromFormat('d F Y', '10 Nov 2023')->format('Y-m-d'),
                'image_path' => 'publications/01JK28R3F8JS68095E6K4AKP4Z.jpeg',
                'publication_category_id' => $categoryIds[2],
            ],
            [
                'title' => 'Insurtech Strategic Innovation',
                'content' => 'Insurtech Strategic Innovation',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28RJDXGCF1MNAQTAFFPT41.jpeg',
                'publication_category_id' => $categoryIds[1],
            ],
            [
                'title' => 'Unicorns & Centaurs Collaboration with Financial Institutions',
                'content' => 'Unicorns & Centaurs Collaboration with Financial Institutions',
                'published_date' => Carbon::createFromFormat('d F Y', '10 June 2020')->format('Y-m-d'),
                'image_path' => 'publications/01JK28RXFYS9PNZD65C8JWNBVG.jpeg',
                'publication_category_id' => $categoryIds[2],
            ],
            [
                'title' => 'Catalyzing Sustainable Impact in indonesia',
                'content' => 'Catalyzing Sustainable Impact in indonesia',
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
