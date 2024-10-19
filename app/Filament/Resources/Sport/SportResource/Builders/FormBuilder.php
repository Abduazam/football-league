<?php

namespace App\Filament\Resources\Sport\SportResource\Builders;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;

final class FormBuilder
{
    public static function getForm(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->unique('sports', 'name', ignoreRecord: true)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->readOnly()
                ])
        ];
    }
}
