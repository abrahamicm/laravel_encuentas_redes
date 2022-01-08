<?php

namespace App\Repositories;

use App\Models\SocielNetwork;
use App\Repositories\BaseRepository;

/**
 * Class SocielNetworkRepository
 * @package App\Repositories
 * @version January 8, 2022, 12:06 pm UTC
*/

class SocielNetworkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return SocielNetwork::class;
    }
}
