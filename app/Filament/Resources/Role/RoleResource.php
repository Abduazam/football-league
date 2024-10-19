<?php

namespace App\Filament\Resources\Role;

use App\Contracts\Classes\Filament\Resource\Traits\SoftDeleteable;
use App\Contracts\Enums\Navigation\NavigationGroupEnum;
use App\Contracts\Enums\Role\RoleEnum;
use App\Filament\Resources\Role\RoleResource\Builders\FormBuilder;
use App\Filament\Resources\Role\RoleResource\Builders\InfoBuilder;
use App\Filament\Resources\Role\RoleResource\Builders\PageBuilder;
use App\Filament\Resources\Role\RoleResource\Builders\TableBuilder;
use App\Filament\Resources\Role\RoleResource\RelationManagers\User\UsersRelationManager;
use App\Models\Role\Role;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class RoleResource extends Resource
{
    use SoftDeleteable;

    protected static ?string $model = Role::class;

    protected static ?string $navigationGroup = NavigationGroupEnum::MANAGEMENT->value;

    public static function form(Form $form): Form
    {
        return $form->schema(FormBuilder::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(TableBuilder::getColumns())
            ->searchDebounce('200')
            ->filters(TableBuilder::getFilters())
            ->actions(TableBuilder::getActions())
            ->actionsAlignment('center')
            ->bulkActions(TableBuilder::getBulks())
            ->checkIfRecordIsSelectableUsing(
                fn (Role $role): bool => !RoleEnum::isAdmin($role->name),
            );
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema(InfoBuilder::getInfo());
    }

    public static function getRelations(): array
    {
        return [
            UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return PageBuilder::getPages();
    }
}
