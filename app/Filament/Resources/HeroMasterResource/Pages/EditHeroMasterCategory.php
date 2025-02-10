<?php

namespace App\Filament\Resources\HeroMasterResource\Pages;

use App\Filament\Resources\HeroMasterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroMaster extends EditRecord
{
    protected static string $resource = HeroMasterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
