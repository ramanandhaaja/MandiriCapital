<?php

namespace App\Filament\Resources\PortfolioFundingArticleSubResource\Pages;

use App\Filament\Resources\PortfolioFundingArticleSubResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioFundingArticleSub extends EditRecord
{
    protected static string $resource = PortfolioFundingArticleSubResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
