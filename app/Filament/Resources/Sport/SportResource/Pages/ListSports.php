<?php

namespace App\Filament\Resources\Sport\SportResource\Pages;

use App\Filament\Resources\Sport\SportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\MaxWidth;

class ListSports extends ListRecords
{
    protected static string $resource = SportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modal()
                ->modalWidth(MaxWidth::Large),
        ];
    }
}
