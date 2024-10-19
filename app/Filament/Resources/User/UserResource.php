<?php

namespace App\Filament\Resources\User;

use App\Contracts\Classes\Filament\Resource\Traits\SoftDeleteable;
use App\Contracts\Enums\Navigation\NavigationGroupEnum;
use App\Filament\Resources\User\UserResource\Builders\FormBuilder;
use App\Filament\Resources\User\UserResource\Builders\InfoBuilder;
use App\Filament\Resources\User\UserResource\Builders\PageBuilder;
use App\Filament\Resources\User\UserResource\Builders\TableBuilder;
use App\Models\User\User;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class UserResource extends Resource
{
    use SoftDeleteable;

    protected static ?string $model = User::class;

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
            ->checkIfRecordIsSelectableUsing(function (User $user) {
                return $user->id !== auth()->id();
            });
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema(InfoBuilder::getInfo());
    }

    public static function getPages(): array
    {
        return PageBuilder::getPages();
    }
}
