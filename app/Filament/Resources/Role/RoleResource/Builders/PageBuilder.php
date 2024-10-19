<?php

namespace App\Filament\Resources\Role\RoleResource\Builders;

use App\Filament\Resources\Role\RoleResource\Pages\ListRoles;
use App\Filament\Resources\Role\RoleResource\Pages\ViewRole;

class PageBuilder
{
    public static function getPages(): array
    {
        return [
            'index' => ListRoles::route('/'),
            'view' => ViewRole::route('/{record}'),
        ];
    }
}
