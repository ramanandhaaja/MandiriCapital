<?php

namespace App\Filament\Resources\PlatformValueCreationXponentResource\Pages;

use App\Filament\Resources\PlatformValueCreationXponentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformValueCreationXponent extends ListRecords
{
    protected static string $resource = PlatformValueCreationXponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
