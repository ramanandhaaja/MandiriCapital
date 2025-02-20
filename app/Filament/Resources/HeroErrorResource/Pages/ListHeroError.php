<?php

namespace App\Filament\Resources\HeroErrorResource\Pages;

use App\Filament\Resources\HeroErrorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroError extends ListRecords
{
    protected static string $resource = HeroErrorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
