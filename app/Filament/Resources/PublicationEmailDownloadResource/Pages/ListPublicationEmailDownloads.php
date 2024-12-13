<?php

namespace App\Filament\Resources\PublicationEmailDownloadResource\Pages;

use App\Filament\Resources\PublicationEmailDownloadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicationEmailDownloads extends ListRecords
{
    protected static string $resource = PublicationEmailDownloadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
