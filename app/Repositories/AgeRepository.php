<?php

namespace App\Repositories;

use App\Models\Age;
use App\Repositories\BaseRepository;

/**
 * Class AgeRepository
 * @package App\Repositories
 * @version January 8, 2022, 9:16 am UTC
*/

class AgeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'age_range'
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
        return Age::class;
    }
}
