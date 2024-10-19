<?php

namespace App\Filament\Resources\Sport\SportResource\Builders;

use App\Filament\Resources\Sport\SportResource\Pages\ListSports;
use App\Filament\Resources\Sport\SportResource\Pages\ViewSport;

class PageBuilder
{
    public static function getPages(): array
    {
        return [
            'index' => ListSports::route('/'),
            'view' => ViewSport::route('/{record}'),
        ];
    }
}
