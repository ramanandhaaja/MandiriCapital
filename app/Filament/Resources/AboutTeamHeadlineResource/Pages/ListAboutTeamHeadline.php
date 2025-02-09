<?php

namespace App\Filament\Resources\AboutTeamHeadlineResource\Pages;

use App\Filament\Resources\AboutTeamHeadlineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutTeamHeadline extends ListRecords
{
    protected static string $resource = AboutTeamHeadlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
