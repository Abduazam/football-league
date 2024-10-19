<?php

namespace App\Contracts\Classes\Filament\Columns;

use App\Models\User\User;
use Filament\Tables\Columns\TextColumn;

class StatusColumn
{
    public static function make(string $label = 'Status'): TextColumn
    {
        return TextColumn::make('deleted_at')
            ->label($label)
            ->getStateUsing(function (User $user) {
                return $user->trashed() ? 'Inactive' : 'Active';
            })
            ->badge()
            ->color(function (string $state) {
                return $state === 'Active' ? 'success' : 'danger';
            })
            ->sortable();
    }
}
