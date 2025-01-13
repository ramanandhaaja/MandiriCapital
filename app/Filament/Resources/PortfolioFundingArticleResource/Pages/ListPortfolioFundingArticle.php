<?php

namespace App\Filament\Resources\PortfolioFundingArticleResource\Pages;

use App\Filament\Resources\PortfolioFundingArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioFundingArticle extends ListRecords
{
    protected static string $resource = PortfolioFundingArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
