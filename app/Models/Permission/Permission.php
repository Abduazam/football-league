<?php

namespace App\Models\Permission;

use App\Models\Permission\Traits\RelationsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Properties
 * @property int $id
 * @property string $name
 * @property bool $is_default
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Permission extends Model
{
    use HasFactory, RelationsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'is_default'
    ];
}
