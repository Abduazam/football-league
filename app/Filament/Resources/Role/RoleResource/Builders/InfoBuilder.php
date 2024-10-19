<?php

namespace App\Filament\Resources\Role\RoleResource\Builders;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class InfoBuilder
{
    public static function getInfo(): array
    {
        return [
            Section::make('Role Information')
                ->schema([
                    TextEntry::make('name')->inlineLabel()
                ])
        ];
    }
}
