<?php

namespace App\Repositories;

use App\Models\AverageTime;
use App\Repositories\BaseRepository;

/**
 * Class AverageTimeRepository
 * @package App\Repositories
 * @version January 8, 2022, 9:02 am UTC
*/

class AverageTimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time_range'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AverageTime::class;
    }
}
