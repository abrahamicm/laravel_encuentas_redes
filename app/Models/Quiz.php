<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Quiz
 *
 * @package App\Models
 * @version January 8, 2022, 10:06 am UTC
 * @property \Illuminate\Database\Eloquent\Collection $ages
 * @property \Illuminate\Database\Eloquent\Collection $averageTimes
 * @property \Illuminate\Database\Eloquent\Collection $averageTime1s
 * @property string $email
 * @property integer $age_id
 * @property string $gender
 * @property integer $social_network_id
 * @property intger $average_time
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read int|null $average_time1s_count
 * @property-read int|null $average_times_count
 * @method static \Database\Factories\QuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newQuery()
 * @method static \Illuminate\Database\Query\Builder|Quiz onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereAgeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereAverageTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereSocialNetworkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Quiz withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Quiz withoutTrashed()
 * @mixin Model
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ages()
    {
        return $this->hasMany(\App\Models\Age::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function averageTimes()
    {
        return $this->hasMany(\App\Models\AverageTime::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function socialNetworks()
    {
        return $this->hasMany(\App\Models\SocialNetwork::class);
    }
}
