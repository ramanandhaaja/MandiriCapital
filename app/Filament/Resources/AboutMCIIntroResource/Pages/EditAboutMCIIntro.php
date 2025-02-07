<?php

namespace App\Filament\Resources\AboutMCIIntroResource\Pages;

use App\Filament\Resources\AboutMCIIntroResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMCIIntro extends EditRecord
{
    protected static string $resource = AboutMCIIntroResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
