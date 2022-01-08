<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Age
 *
 * @package App\Models
 * @version January 8, 2022, 9:16 am UTC
 * @property string $age_range
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\AgeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Age newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Age newQuery()
 * @method static \Illuminate\Database\Query\Builder|Age onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Age query()
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereAgeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Age withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Age withoutTrashed()
 * @mixin Model
 */
class Age extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'age_range'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'age_range' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'age_range' => 'required'
    ];

    
}
