<?php

namespace App\Filament\Resources\AboutMCIIntroResource\Pages;

use App\Filament\Resources\AboutMCIIntroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMCIIntro extends ListRecords
{
    protected static string $resource = AboutMCIIntroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
