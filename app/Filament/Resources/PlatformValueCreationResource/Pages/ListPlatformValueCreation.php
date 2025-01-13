<?php

namespace App\Filament\Resources\PlatformValueCreationResource\Pages;

use App\Filament\Resources\PlatformValueCreationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformValueCreation extends ListRecords
{
    protected static string $resource = PlatformValueCreationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
