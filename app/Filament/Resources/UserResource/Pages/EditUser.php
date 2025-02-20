<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        // If the user is updating their own password, redirect to login
        if (
            $this->record->id === Auth::id() &&
            $this->data['password'] &&
            filled($this->data['password'])
        ) {
            Auth::logout();
            return '/admin/login';
        }

        // Otherwise, stay on the same page
        return null;
    }

    protected function afterSave(): void
    {
        // If the user is updating their own password, invalidate the session
        if (
            $this->record->id === Auth::id() &&
            $this->data['password'] &&
            filled($this->data['password'])
        ) {
            Auth::guard('web')->logout();
            session()->invalidate();
            session()->regenerateToken();
        }
    }
}
