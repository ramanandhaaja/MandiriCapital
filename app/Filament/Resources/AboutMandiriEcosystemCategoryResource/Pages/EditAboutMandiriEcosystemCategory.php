<?php

namespace App\Filament\Resources\AboutMandiriEcosystemCategoryResource\Pages;

use App\Filament\Resources\AboutMandiriEcosystemCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMandiriEcosystemCategory extends EditRecord
{
    protected static string $resource = AboutMandiriEcosystemCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
