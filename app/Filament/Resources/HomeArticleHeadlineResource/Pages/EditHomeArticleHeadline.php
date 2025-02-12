<?php

namespace App\Filament\Resources\HomeArticleHeadlineResource\Pages;

use App\Filament\Resources\HomeArticleHeadlineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeArticleHeadline extends EditRecord
{
    protected static string $resource = HomeArticleHeadlineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
