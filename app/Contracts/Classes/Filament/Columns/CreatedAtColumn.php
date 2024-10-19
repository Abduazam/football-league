<?php

namespace App\Contracts\Classes\Filament\Columns;

use Filament\Tables\Columns\TextColumn;

class CreatedAtColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('created_at')
            ->alignCenter()
            ->sortable();
    }
}
