<?php

namespace App\Filament\Resources\Role\RoleResource\Builders;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;

final class FormBuilder
{
    public static function getForm(): array
    {
        return [
            Grid::make(1)
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->unique('roles', 'name', ignoreRecord: true)
                ])
        ];
    }
}
