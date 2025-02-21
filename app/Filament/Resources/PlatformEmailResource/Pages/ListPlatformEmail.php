<?php

namespace App\Filament\Resources\PlatformEmailResource\Pages;

use App\Filament\Resources\PlatformEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformEmail extends ListRecords
{
    protected static string $resource = PlatformEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
