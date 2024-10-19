<?php

namespace App\Filament\Resources\User\UserResource\Builders;

use App\Filament\Resources\User\UserResource\Pages\CreateUser;
use App\Filament\Resources\User\UserResource\Pages\EditUser;
use App\Models\Role\Role;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Validation\Rules\Password;

final class FormBuilder
{
    public static function getForm(): array
    {
        return [
            Section::make('User Information')
                ->columns([
                    'sm' => 1,
                    'md' => 4
                ])
                ->schema([
                    Grid::make()
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(75),
                            TextInput::make('email')
                                ->required()
                                ->maxLength(75)
                                ->unique('users', 'email', ignoreRecord: true),
                            TextInput::make('password')
                                ->required()
                                ->password()
                                ->rule(Password::default())
                                ->visible(fn ($livewire) => $livewire instanceof CreateUser),
                            Select::make('role_id')
                                ->label('Role')
                                ->options(Role::query()->pluck('name', 'id')->toArray())
                                ->required(),
                    ]),
                ]),

            Section::make('New Password Information')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->schema([
                    Grid::make()
                        ->schema([
                            Grid::make()->schema([
                                TextInput::make('new_password')
                                    ->password()
                                    ->nullable()
                                    ->rule(Password::default()),
                                TextInput::make('new_password_confirmation')
                                    ->password()
                                    ->same('new_password')
                                    ->requiredWith('new_password'),
                            ])
                        ])
                ])
                ->visible(fn ($livewire) => $livewire instanceof EditUser)
        ];
    }
}
