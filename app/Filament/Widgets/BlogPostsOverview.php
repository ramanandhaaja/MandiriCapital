<?php

namespace App\Filament\Widgets;

use App\Models\BlogPost;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogPostsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Blog Posts', BlogPost::count())
                ->description('Total number of blog posts')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),

            Stat::make('Published Posts', BlogPost::where('status', 'published')->count())
                ->description('Number of published posts')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Draft Posts', BlogPost::where('status', 'draft')->count())
                ->description('Number of draft posts')
                ->descriptionIcon('heroicon-m-document-duplicate')
                ->color('warning'),
        ];

    }
}
