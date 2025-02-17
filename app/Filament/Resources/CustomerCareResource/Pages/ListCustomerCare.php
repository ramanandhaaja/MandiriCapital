<?php

namespace App\Filament\Resources\CustomerCareResource\Pages;

use App\Filament\Resources\CustomerCareResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerCare extends ListRecords
{
    protected static string $resource = CustomerCareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
