<?php

namespace App\Filament\Resources\Sport\SportResource\Pages;

use App\Contracts\Classes\Filament\Buttons\BackButton;
use App\Filament\Resources\Sport\SportResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\MaxWidth;

class ViewSport extends ViewRecord
{
    protected static string $resource = SportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            BackButton::make(self::$resource),

            EditAction::make()
                ->modal()
                ->modalWidth(MaxWidth::Medium),
        ];
    }
}
