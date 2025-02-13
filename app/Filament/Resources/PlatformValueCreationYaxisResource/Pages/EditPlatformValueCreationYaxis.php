<?php

namespace App\Filament\Resources\PlatformValueCreationYaxisResource\Pages;

use App\Filament\Resources\PlatformValueCreationYaxisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformValueCreationYaxis extends EditRecord
{
    protected static string $resource = PlatformValueCreationYaxisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
