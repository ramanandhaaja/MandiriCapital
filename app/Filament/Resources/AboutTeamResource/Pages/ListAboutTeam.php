<?php

namespace App\Filament\Resources\AboutTeamResource\Pages;

use App\Filament\Resources\AboutTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutTeam extends ListRecords
{
    protected static string $resource = AboutTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
