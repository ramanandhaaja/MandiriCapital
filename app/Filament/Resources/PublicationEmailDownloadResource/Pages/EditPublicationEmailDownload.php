<?php

namespace App\Filament\Resources\PublicationEmailDownloadResource\Pages;

use App\Filament\Resources\PublicationEmailDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationEmailDownload extends EditRecord
{
    protected static string $resource = PublicationEmailDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
