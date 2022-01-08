<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AverageTime
 * @package App\Models
 * @version January 8, 2022, 9:02 am UTC
 *
 * @property string $time_range
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
