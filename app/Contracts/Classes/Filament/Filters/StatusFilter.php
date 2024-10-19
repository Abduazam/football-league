<?php

namespace App\Contracts\Classes\Filament\Filters;

use Filament\Tables\Filters\TrashedFilter;

class StatusFilter
{
    public static function make($label = 'Status'): TrashedFilter
    {
        return TrashedFilter::make('trashed')->label($label);
    }
}
