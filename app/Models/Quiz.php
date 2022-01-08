<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Quiz
 * @package App\Models
 * @version January 8, 2022, 12:07 pm UTC
 *
 * @property \App\Models\Ages $ages
 * @property \App\Models\SocielNetwork $socielNetwork
 * @property string $email
 * @property integer $age_id
 * @property string $gender
 * @property integer $social_network_id
 * @property time $average_time
 */
class Quiz extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'quizzes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email',
        'age_id',
        'gender',
        'social_network_id',
        'average_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'age_id' => 'integer',
        'gender' => 'string',
        'social_network_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required',
        'age_id' => 'required',
        'gender' => 'required',
        'social_network_id' => 'required',
        'average_time' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ages()
    {
        return $this->belongsTo(\App\Models\Ages::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function socielNetwork()
    {
        return $this->belongsTo(\App\Models\SocielNetwork::class);
    }
}
