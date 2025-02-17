<?php

namespace App\Filament\Resources\CustomerCareHowResource\Pages;

use App\Filament\Resources\CustomerCareHowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerCareHow extends ListRecords
{
    protected static string $resource = CustomerCareHowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
