<?php

namespace App\Filament\Resources\Sport;

use App\Contracts\Classes\Filament\Resource\Traits\SoftDeleteable;
use App\Contracts\Enums\Navigation\NavigationGroupEnum;
use App\Filament\Resources\Sport\SportResource\Builders\FormBuilder;
use App\Filament\Resources\Sport\SportResource\Builders\InfoBuilder;
use App\Filament\Resources\Sport\SportResource\Builders\PageBuilder;
use App\Filament\Resources\Sport\SportResource\Builders\TableBuilder;
use App\Models\Sport\Sport;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class SportResource extends Resource
{
    use SoftDeleteable;

    protected static ?string $model = Sport::class;

    protected static ?string $navigationGroup = NavigationGroupEnum::INFORMATION->value;

    public static function form(Form $form): Form
    {
        return $form->schema(FormBuilder::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(TableBuilder::getColumns())
            ->filters(TableBuilder::getFilters())
            ->actions(TableBuilder::getActions())
            ->actionsAlignment()
            ->bulkActions(TableBuilder::getBulks());
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema(InfoBuilder::getInfo());
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return PageBuilder::getPages();
    }
}
