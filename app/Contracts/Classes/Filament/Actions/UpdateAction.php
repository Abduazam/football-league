<?php

namespace App\Contracts\Classes\Filament\Actions;

use Filament\Tables\Actions\EditAction;

class UpdateAction
{
    public static function make(): EditAction
    {
        return EditAction::make()
            ->icon('heroicon-o-pencil');
    }
}
