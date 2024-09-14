<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property int $is_done
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\taskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|task query()
 * @method static \Illuminate\Database\Eloquent\Builder|task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|task whereIsDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|task whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_done'
    ];

    protected $casts = [
        'is_done' => 'bool'
    ];
}
