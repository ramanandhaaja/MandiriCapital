<?php

namespace App\Filament\Resources\HeroSectionSubCategoryResource\Pages;

use App\Filament\Resources\HeroSectionSubCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroSectionSubCategory extends EditRecord
{
    protected static string $resource = HeroSectionSubCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
