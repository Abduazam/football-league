<?php

namespace App\Models\League\Traits;

use App\Models\Sport\Sport;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RelationsTrait
{
    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }
}
