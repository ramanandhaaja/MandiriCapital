<?php

namespace App\Filament\Resources\HomeArticleHeadlineResource\Pages;

use App\Filament\Resources\HomeArticleHeadlineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeArticleHeadline extends ListRecords
{
    protected static string $resource = HomeArticleHeadlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
