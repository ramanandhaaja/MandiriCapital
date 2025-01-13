<?php

namespace App\Filament\Resources\PlatformValueCreationResource\Pages;

use App\Filament\Resources\PlatformValueCreationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformValueCreation extends EditRecord
{
    protected static string $resource = PlatformValueCreationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
