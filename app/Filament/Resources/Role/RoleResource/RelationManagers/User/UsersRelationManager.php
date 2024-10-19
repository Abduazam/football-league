<?php

namespace App\Filament\Resources\Role\RoleResource\RelationManagers\User;

use App\Filament\Resources\Role\RoleResource\RelationManagers\User\Builders\TableBuilder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Illuminate\Validation\Rules\Password;

class UsersRelationManager extends RelationManager
{
    protected static string $relationship = 'users';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
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
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns(TableBuilder::getColumns())
            ->headerActions(TableBuilder::getHeaderActions())
            ->actions(TableBuilder::getActions())
            ->actionsAlignment('center');
    }
}
