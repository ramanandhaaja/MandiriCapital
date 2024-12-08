<?php

namespace App\Filament\Resources\HeroSectionCategoryResource\Pages;

use App\Filament\Resources\HeroSectionCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroSectionCategories extends ListRecords
{
    protected static string $resource = HeroSectionCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
