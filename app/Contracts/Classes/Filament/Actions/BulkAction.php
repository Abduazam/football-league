<?php

namespace App\Contracts\Classes\Filament\Actions;

use Filament\Support\Colors\Color;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;

class BulkAction
{
    public static function make(): array
    {
        return [
            BulkActionGroup::make([
                DeleteBulkAction::make()
                    ->label('Delete')
                    ->icon('heroicon-o-no-symbol'),
                RestoreBulkAction::make()
                    ->label('Restore')
                    ->color(Color::Cyan),
                ForceDeleteBulkAction::make()
                    ->label('Destroy'),
            ]),
        ];
    }
}
