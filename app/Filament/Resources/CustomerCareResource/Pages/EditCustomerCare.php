<?php

namespace App\Filament\Resources\CustomerCareResource\Pages;

use App\Filament\Resources\CustomerCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerCare extends EditRecord
{
    protected static string $resource = CustomerCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
