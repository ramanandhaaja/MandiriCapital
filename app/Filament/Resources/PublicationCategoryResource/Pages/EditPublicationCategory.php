<?php

namespace App\Filament\Resources\PublicationCategoryResource\Pages;

use App\Filament\Resources\PublicationCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationCategory extends EditRecord
{
    protected static string $resource = PublicationCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
