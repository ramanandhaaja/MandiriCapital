<?php

namespace App\Filament\Resources\HeroErrorResource\Pages;

use App\Filament\Resources\HeroErrorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroError extends EditRecord
{
    protected static string $resource = HeroErrorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
