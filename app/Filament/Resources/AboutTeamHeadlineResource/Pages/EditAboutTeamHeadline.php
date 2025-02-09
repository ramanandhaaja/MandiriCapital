<?php

namespace App\Filament\Resources\AboutTeamHeadlineResource\Pages;

use App\Filament\Resources\AboutTeamHeadlineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutTeamHeadline extends EditRecord
{
    protected static string $resource = AboutTeamHeadlineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
