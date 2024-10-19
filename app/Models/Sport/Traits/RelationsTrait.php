<?php

namespace App\Models\Sport\Traits;

use App\Models\League\League;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RelationsTrait
{
    /**
     * Returns user's role.
     *
     * @return HasMany
     */
    public function leagues(): HasMany
    {
        return $this->hasMany(League::class)->withTrashed();
    }
}
