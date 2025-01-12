<?php

namespace App\Filament\Resources\AboutMandiriEcosystemResource\Pages;

use App\Filament\Resources\AboutMandiriEcosystemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMandiriEcosystem extends EditRecord
{
    protected static string $resource = AboutMandiriEcosystemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
