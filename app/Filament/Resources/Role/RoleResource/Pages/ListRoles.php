<?php

namespace App\Filament\Resources\Role\RoleResource\Pages;

use App\Filament\Resources\Role\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\MaxWidth;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modal()
                ->modalWidth(MaxWidth::Medium),
        ];
    }
}
