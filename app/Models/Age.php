<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Age
 * @package App\Models
 * @version January 8, 2022, 12:03 pm UTC
 *
 * @property string $age_range
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
