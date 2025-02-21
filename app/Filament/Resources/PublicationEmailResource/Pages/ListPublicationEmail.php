<?php

namespace App\Filament\Resources\PublicationEmailResource\Pages;

use App\Filament\Resources\PublicationEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicationEmail extends ListRecords
{
    protected static string $resource = PublicationEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
