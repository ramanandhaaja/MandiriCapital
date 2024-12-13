<?php

namespace App\Filament\Resources\PublicationEmailRegisteredResource\Pages;

use App\Filament\Resources\PublicationEmailRegisteredResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationEmailRegistered extends EditRecord
{
    protected static string $resource = PublicationEmailRegisteredResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
