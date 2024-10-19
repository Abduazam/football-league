<?php

namespace App\Filament\Resources\Role\RoleResource\Builders;

use App\Contracts\Classes\Filament\Actions\DeleteAction;
use App\Contracts\Classes\Filament\Actions\DestroyAction;
use App\Contracts\Classes\Filament\Actions\RestoreAction;
use App\Contracts\Classes\Filament\Actions\UpdateAction;
use App\Contracts\Classes\Filament\Builders\Traits\Bulkable;
use App\Contracts\Classes\Filament\Columns\CountColumn;
use App\Contracts\Classes\Filament\Columns\CreatedAtColumn;
use App\Contracts\Classes\Filament\Columns\StatusColumn;
use App\Contracts\Classes\Filament\Filters\StatusFilter;
use App\Contracts\Enums\Role\RoleEnum;
use App\Models\Role\Role;
use Exception;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;

final class TableBuilder
{
    use Bulkable;

    /**
     * Returns table columns.
     *
     * @return array
     */
    public static function getColumns(): array
    {
        return [
            TextColumn::make('name')
                ->alignCenter()
                ->searchable(),
            CountColumn::make('users_count', 'users'),
            CountColumn::make('permissions_count', 'permissions'),
            StatusColumn::make(),
            CreatedAtColumn::make()
        ];
    }

    /**
     * Returns filters.
     *
     * @throws Exception
     */
    public static function getFilters(): array
    {
        return [
            StatusFilter::make(),
        ];
    }

    /**
     * Returns actions.
     *
     * @return array
     */
    public static function getActions(): array
    {
        return [
            ViewAction::make(),
            UpdateAction::make()
                ->visible(function (Role $role) {
                    return !$role->trashed();
                })
                ->modal()
                ->modalWidth(MaxWidth::Medium),
            DeleteAction::make()
                ->visible(function (Role $role) {
                    return !RoleEnum::isAdmin($role->name);
                }),
            RestoreAction::make(),
            DestroyAction::make(),
        ];
    }
}
