<?php

namespace App\Filament\Resources\PortfolioArticleSubResource\Pages;

use App\Filament\Resources\PortfolioArticleSubResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioArticleSub extends ListRecords
{
    protected static string $resource = PortfolioArticleSubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
