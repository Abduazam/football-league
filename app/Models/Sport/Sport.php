<?php

namespace App\Models\Sport;

use App\Models\Sport\Traits\RelationsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Properties
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 */
final class Sport extends Model
{
    use HasFactory, RelationsTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];
}
