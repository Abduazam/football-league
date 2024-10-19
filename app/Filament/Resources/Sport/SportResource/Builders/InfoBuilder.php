<?php

namespace App\Filament\Resources\Sport\SportResource\Builders;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class InfoBuilder
{
    public static function getInfo(): array
    {
        return [
            Section::make('Sport Information')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('slug')
                ])
                ->columns()
        ];
    }
}
