<?php

namespace App\Filament\Resources\PublicationEmailResource\Pages;

use App\Filament\Resources\PublicationEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationEmail extends EditRecord
{
    protected static string $resource = PublicationEmailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
