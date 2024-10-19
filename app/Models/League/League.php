<?php

namespace App\Models\League;

use App\Models\League\Traits\RelationsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Properties
 * @property int $id
 * @property int $sport_id
 * @property string $name
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 */
class League extends Model
{
    use HasFactory, RelationsTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sport_id',
        'name',
        'slug',
    ];
}
