<?php

namespace App\Filament\Resources\PlatformCounterResource\Pages;

use App\Filament\Resources\PlatformCounterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformCounter extends EditRecord
{
    protected static string $resource = PlatformCounterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
