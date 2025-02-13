<?php

namespace App\Filament\Resources\PlatformValueCreationZenithResource\Pages;

use App\Filament\Resources\PlatformValueCreationZenithResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformValueCreationZenith extends EditRecord
{
    protected static string $resource = PlatformValueCreationZenithResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
