<?php

namespace App\Filament\Resources\HomeArticleResource\Pages;

use App\Filament\Resources\HomeArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeArticles extends ListRecords
{
    protected static string $resource = HomeArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
