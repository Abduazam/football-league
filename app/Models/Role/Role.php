<?php

namespace App\Models\Role;

use App\Models\Permission\Permission;
use App\Models\Role\Traits\RelationsTrait;
use App\Models\User\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Properties
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 *
 * Relations
 * @property Collection|User[] $users
 * @property Collection|Permission[] $permissions
 */
class Role extends Model
{
    use HasFactory, RelationsTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
    ];
}
