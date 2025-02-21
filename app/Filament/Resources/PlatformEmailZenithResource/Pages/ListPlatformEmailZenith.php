<?php

namespace App\Filament\Resources\PlatformEmailZenithResource\Pages;

use App\Filament\Resources\PlatformEmailZenithResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformEmailZenith extends ListRecords
{
    protected static string $resource = PlatformEmailZenithResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
