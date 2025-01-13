<?php

namespace App\Filament\Resources\PortfolioFundingArticleSubResource\Pages;

use App\Filament\Resources\PortfolioFundingArticleSubResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioFundingArticleSub extends ListRecords
{
    protected static string $resource = PortfolioFundingArticleSubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
