<?php

namespace App\Filament\Resources\AboutPrioritySectorResource\Pages;

use App\Filament\Resources\AboutPrioritySectorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutPrioritySector extends ListRecords
{
    protected static string $resource = AboutPrioritySectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
