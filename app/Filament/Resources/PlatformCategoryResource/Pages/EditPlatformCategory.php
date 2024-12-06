<?php

namespace App\Filament\Resources\PlatformCategoryResource\Pages;

use App\Filament\Resources\PlatformCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformCategory extends EditRecord
{
    protected static string $resource = PlatformCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
