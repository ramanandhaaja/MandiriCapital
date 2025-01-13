<?php

namespace App\Filament\Resources\PortfolioArticleSubResource\Pages;

use App\Filament\Resources\PortfolioArticleSubResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioArticleSub extends EditRecord
{
    protected static string $resource = PortfolioArticleSubResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
