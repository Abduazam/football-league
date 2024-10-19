<?php

namespace App\Filament\Resources\Role\RoleResource\Pages;

use App\Contracts\Classes\Filament\Buttons\BackButton;
use App\Filament\Resources\Role\RoleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\MaxWidth;

class ViewRole extends ViewRecord
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            BackButton::make(self::$resource),

            EditAction::make()
                ->modal()
                ->modalWidth(MaxWidth::Medium),
        ];
    }
}
