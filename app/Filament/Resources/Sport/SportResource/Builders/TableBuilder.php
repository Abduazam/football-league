<?php

namespace App\Filament\Resources\Sport\SportResource\Builders;

use App\Contracts\Classes\Filament\Actions\DeleteAction;
use App\Contracts\Classes\Filament\Actions\DestroyAction;
use App\Contracts\Classes\Filament\Actions\RestoreAction;
use App\Contracts\Classes\Filament\Actions\UpdateAction;
use App\Contracts\Classes\Filament\Builders\Traits\Bulkable;
use App\Contracts\Classes\Filament\Columns\CreatedAtColumn;
use App\Contracts\Classes\Filament\Columns\StatusColumn;
use App\Contracts\Classes\Filament\Filters\StatusFilter;
use App\Models\Sport\Sport;
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
            TextColumn::make('slug')
                ->alignCenter(),
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
                ->visible(function (Sport $sport) {
                    return !$sport->trashed();
                })
                ->modal()
                ->modalWidth(MaxWidth::Medium),
            DeleteAction::make(),
            RestoreAction::make(),
            DestroyAction::make(),
        ];
    }
}
