<?php

namespace App\Filament\Resources\User\UserResource\Builders;

use App\Filament\Resources\User\UserResource\Pages\CreateUser;
use App\Filament\Resources\User\UserResource\Pages\EditUser;
use App\Filament\Resources\User\UserResource\Pages\ListUsers;
use App\Filament\Resources\User\UserResource\Pages\ViewUser;

class PageBuilder
{
    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'view' => ViewUser::route('/{record}'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
