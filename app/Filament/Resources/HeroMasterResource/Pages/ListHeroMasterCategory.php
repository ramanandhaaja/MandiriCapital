<?php

namespace App\Filament\Resources\HeroMasterResource\Pages;

use App\Filament\Resources\HeroMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroMaster extends ListRecords
{
    protected static string $resource = HeroMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
