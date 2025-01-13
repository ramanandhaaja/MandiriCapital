<?php

namespace App\Filament\Resources\PortfolioFundingArticleResource\Pages;

use App\Filament\Resources\PortfolioFundingArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioFundingArticle extends EditRecord
{
    protected static string $resource = PortfolioFundingArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
