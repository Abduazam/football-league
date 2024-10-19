<?php

namespace App\Contracts\Classes\Filament\Buttons;

use Filament\Actions\Action;
use Filament\Support\Colors\Color;

final class BackButton
{
    public static function make($resource): Action
    {
        return Action::make('Back')
            ->url($resource::getUrl('index'))
            ->button()
            ->color(Color::Gray)
            ->outlined();
    }
}
