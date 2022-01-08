<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SocielNetwork
 * @package App\Models
 * @version January 8, 2022, 12:06 pm UTC
 *
 * @property string $name
 */
class SocielNetwork extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sociel_networks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
