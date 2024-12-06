<?php

namespace App\Filament\Resources\PlatformCategoryResource\Pages;

use App\Filament\Resources\PlatformCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformCategories extends ListRecords
{
    protected static string $resource = PlatformCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
