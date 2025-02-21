<?php

namespace App\Filament\Resources\PlatformEmailZenithResource\Pages;

use App\Filament\Resources\PlatformEmailZenithResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformEmailZenith extends EditRecord
{
    protected static string $resource = PlatformEmailZenithResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
