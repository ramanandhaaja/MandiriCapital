<?php

namespace App\Filament\Resources\PortfolioArticleResource\Pages;

use App\Filament\Resources\PortfolioArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioArticle extends EditRecord
{
    protected static string $resource = PortfolioArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
