<?php

namespace App\Contracts\Classes\Filament\Actions;

use Filament\Tables\Actions\ForceDeleteAction;

class DestroyAction
{
    public static function make(): ForceDeleteAction
    {
        return ForceDeleteAction::make()
            ->label('Destroy');
    }
}
