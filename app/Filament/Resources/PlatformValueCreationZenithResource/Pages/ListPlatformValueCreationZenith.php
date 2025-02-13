<?php

namespace App\Filament\Resources\PlatformValueCreationZenithResource\Pages;

use App\Filament\Resources\PlatformValueCreationZenithResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformValueCreationZenith extends ListRecords
{
    protected static string $resource = PlatformValueCreationZenithResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
