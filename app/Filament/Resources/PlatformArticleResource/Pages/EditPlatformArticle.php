<?php

namespace App\Filament\Resources\PlatformArticleResource\Pages;

use App\Filament\Resources\PlatformArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformArticle extends EditRecord
{
    protected static string $resource = PlatformArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
