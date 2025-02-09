<?php

namespace App\Filament\Resources\AboutTeamCategoryResource\Pages;

use App\Filament\Resources\AboutTeamCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutTeamCategory extends EditRecord
{
    protected static string $resource = AboutTeamCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
