<?php

namespace App\Models\Permission\Traits;

use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait RelationsTrait
{
    /**
     * Returns roles assigned to the particular permission.
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_permission')->withTrashed();
    }
}
