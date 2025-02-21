<?php

namespace App\Filament\Resources\HomeEmailStartupResource\Pages;

use App\Filament\Resources\HomeEmailStartupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeEmailStartup extends ListRecords
{
    protected static string $resource = HomeEmailStartupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
