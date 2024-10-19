<?php

namespace App\Filament\Resources\User\UserResource\Pages;

use App\Contracts\Classes\Filament\Buttons\BackButton;
use App\Filament\Resources\User\UserResource;
use App\Models\User\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\MaxWidth;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            BackButton::make(self::$resource),

            EditAction::make()
                ->modal()
                ->modalWidth(MaxWidth::Medium),

            DeleteAction::make()
                ->visible(function (User $user) {
                    return $user->id !== auth()->id();
                })
        ];
    }
}
