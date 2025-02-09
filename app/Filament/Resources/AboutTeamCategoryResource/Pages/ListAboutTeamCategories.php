<?php

namespace App\Filament\Resources\AboutTeamCategoryResource\Pages;

use App\Filament\Resources\AboutTeamCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutTeamCategories extends ListRecords
{
    protected static string $resource = AboutTeamCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
