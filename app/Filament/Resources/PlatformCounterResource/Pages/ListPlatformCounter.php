<?php

namespace App\Filament\Resources\PlatformCounterResource\Pages;

use App\Filament\Resources\PlatformCounterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformCounter extends ListRecords
{
    protected static string $resource = PlatformCounterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
