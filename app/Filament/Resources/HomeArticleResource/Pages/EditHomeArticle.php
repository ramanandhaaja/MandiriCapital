<?php

namespace App\Filament\Resources\HomeArticleResource\Pages;

use App\Filament\Resources\HomeArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeArticle extends EditRecord
{
    protected static string $resource = HomeArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
