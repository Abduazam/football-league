<?php

namespace App\Contracts\Classes\Filament\Actions;

use Filament\Tables\Actions\DeleteAction as DeleteActionByFilament;

class DeleteAction
{
    public static function make(): DeleteActionByFilament
    {
        return DeleteActionByFilament::make()
            ->icon('heroicon-o-no-symbol');
    }
}
