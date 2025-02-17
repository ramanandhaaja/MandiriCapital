<?php

namespace App\Filament\Resources\CustomerCareHowResource\Pages;

use App\Filament\Resources\CustomerCareHowResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerCareHow extends EditRecord
{
    protected static string $resource = CustomerCareHowResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
