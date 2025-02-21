<?php

namespace App\Filament\Resources\PlatformEmailResource\Pages;

use App\Filament\Resources\PlatformEmailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformEmail extends EditRecord
{
    protected static string $resource = PlatformEmailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
