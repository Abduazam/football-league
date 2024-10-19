<?php

namespace App\Filament\Resources\User\UserResource\Builders;

use App\Contracts\Classes\Filament\Actions\DeleteAction;
use App\Contracts\Classes\Filament\Actions\DestroyAction;
use App\Contracts\Classes\Filament\Actions\RestoreAction;
use App\Contracts\Classes\Filament\Actions\UpdateAction;
use App\Contracts\Classes\Filament\Builders\Traits\Bulkable;
use App\Contracts\Classes\Filament\Columns\CreatedAtColumn;
use App\Contracts\Classes\Filament\Columns\StatusColumn;
use App\Contracts\Classes\Filament\Filters\StatusFilter;
use App\Models\User\User;
use Exception;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

final class TableBuilder
{
    use Bulkable;

    /**
     * Returns table columns.
     *
     * @param bool $role
     * @return array
     */
    public static function getColumns(bool $role = true): array
    {
        return [
            TextColumn::make('name')
                ->alignCenter()
                ->searchable(),
            TextColumn::make('email')
                ->alignCenter()
                ->searchable(),
            TextColumn::make('role.name')
                ->alignCenter()
                ->visible($role),
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
            SelectFilter::make('role')
                ->relationship('role', 'name')
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
                ->visible(function (User $user) {
                    return !$user->trashed();
                }),
            DeleteAction::make()
                ->visible(function (User $user) {
                    return $user->id !== auth()->id();
                }),
            RestoreAction::make(),
            DestroyAction::make(),
        ];
    }
}
