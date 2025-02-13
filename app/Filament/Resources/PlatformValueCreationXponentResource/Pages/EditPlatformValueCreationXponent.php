<?php

namespace App\Filament\Resources\PlatformValueCreationXponentResource\Pages;

use App\Filament\Resources\PlatformValueCreationXponentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformValueCreationXponent extends EditRecord
{
    protected static string $resource = PlatformValueCreationXponentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
