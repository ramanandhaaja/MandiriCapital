<?php

namespace App\Filament\Resources\HeroSectionSubCategoryResource\Pages;

use App\Filament\Resources\HeroSectionSubCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroSectionSubCategory extends ListRecords
{
    protected static string $resource = HeroSectionSubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
