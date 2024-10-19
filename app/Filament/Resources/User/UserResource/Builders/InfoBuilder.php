<?php

namespace App\Filament\Resources\User\UserResource\Builders;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

final class InfoBuilder
{
    public static function getInfo(): array
    {
        return [
            Section::make('User Information')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('email'),
                    TextEntry::make('role.name'),
                ])
                ->columns(3)
        ];
    }
}
