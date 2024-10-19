<?php

namespace App\Filament\Resources\Role\RoleResource\RelationManagers\User\Builders;

use App\Contracts\Classes\Filament\Actions\DeleteAction;
use App\Contracts\Classes\Filament\Actions\DestroyAction;
use App\Contracts\Classes\Filament\Actions\RestoreAction;
use App\Contracts\Classes\Filament\Actions\UpdateAction;
use App\Filament\Resources\User\UserResource\Builders\TableBuilder as UserTableBuilder;
use App\Models\User\User;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables\Actions\CreateAction;

class TableBuilder
{
    public static function getColumns(): array
    {
        return UserTableBuilder::getColumns(false);
    }

    public static function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->slideOver()
                ->modalWidth(MaxWidth::Medium),
        ];
    }

    public static function getActions(): array
    {
        return [
            UpdateAction::make()
                ->visible(function (User $user) {
                    return !$user->trashed();
                })
                ->slideOver()
                ->modalWidth(MaxWidth::Medium),
            DeleteAction::make()
                ->visible(function (User $user) {
                    return $user->id !== auth()->id();
                }),
            RestoreAction::make(),
            DestroyAction::make()
        ];
    }
}
