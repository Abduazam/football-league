<?php

namespace App\Contracts\Classes\Filament\Actions;

use Filament\Support\Colors\Color;
use Filament\Tables\Actions\RestoreAction as RestoreActionByFilament;

class RestoreAction
{
    public static function make(): RestoreActionByFilament
    {
        return RestoreActionByFilament::make()
            ->color(Color::Cyan);
    }
}
