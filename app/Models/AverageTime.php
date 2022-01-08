<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AverageTime
 *
 * @package App\Models
 * @version January 8, 2022, 9:02 am UTC
 * @property string $time_range
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\AverageTimeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime newQuery()
 * @method static \Illuminate\Database\Query\Builder|AverageTime onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime whereTimeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AverageTime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|AverageTime withTrashed()
 * @method static \Illuminate\Database\Query\Builder|AverageTime withoutTrashed()
 * @mixin Model
 */
class AverageTime extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'average_times';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'time_range'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'time_range' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'time_range' => 'required'
    ];

    
}
