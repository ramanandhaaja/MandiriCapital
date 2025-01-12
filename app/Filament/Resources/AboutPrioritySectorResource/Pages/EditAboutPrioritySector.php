<?php

namespace App\Filament\Resources\AboutPrioritySectorResource\Pages;

use App\Filament\Resources\AboutPrioritySectorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPrioritySector extends EditRecord
{
    protected static string $resource = AboutPrioritySectorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
