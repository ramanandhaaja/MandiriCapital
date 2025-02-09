<?php

namespace App\Filament\Resources\AboutMandiriEcosystemCategoryResource\Pages;

use App\Filament\Resources\AboutMandiriEcosystemCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMandiriEcosystemCategories extends ListRecords
{
    protected static string $resource = AboutMandiriEcosystemCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
