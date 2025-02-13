<?php

namespace App\Filament\Resources\PlatformValueCreationYaxisResource\Pages;

use App\Filament\Resources\PlatformValueCreationYaxisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformValueCreationYaxis extends ListRecords
{
    protected static string $resource = PlatformValueCreationYaxisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
