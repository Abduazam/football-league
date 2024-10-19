<?php

namespace App\Models\User\Traits;

use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RelationsTrait
{
    /**
     * Returns user's role.
     *
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class)->withTrashed();
    }
}
