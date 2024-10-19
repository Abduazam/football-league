<?php

namespace App\Contracts\Classes\Filament\Builders\Traits;

use App\Contracts\Classes\Filament\Actions\BulkAction;

trait Bulkable
{
    /**
     * Returns bulk actions.
     *
     * @return array
     */
    public static function getBulks(): array
    {
        return BulkAction::make();
    }
}
