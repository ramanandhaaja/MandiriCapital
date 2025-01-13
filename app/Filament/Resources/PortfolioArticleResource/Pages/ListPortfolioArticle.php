<?php

namespace App\Filament\Resources\PortfolioArticleResource\Pages;

use App\Filament\Resources\PortfolioArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioArticle extends ListRecords
{
    protected static string $resource = PortfolioArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
