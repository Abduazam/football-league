<?php

namespace App\Contracts\Classes\Filament\Columns;

use Filament\Tables\Columns\TextColumn;

class CountColumn
{
    public static function make(string $name, string $relation): TextColumn
    {
        return TextColumn::make($name)
            ->counts($relation)
            ->alignCenter()
            ->sortable();
    }
}
