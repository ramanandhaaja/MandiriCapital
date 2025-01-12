<?php

namespace App\Filament\Resources\AboutMandiriEcosystemResource\Pages;

use App\Filament\Resources\AboutMandiriEcosystemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMandiriEcosystem extends ListRecords
{
    protected static string $resource = AboutMandiriEcosystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
