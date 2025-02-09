<?php

namespace App\Filament\Resources\PlatformArticleResource\Pages;

use App\Filament\Resources\PlatformArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformArticle extends ListRecords
{
    protected static string $resource = PlatformArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
