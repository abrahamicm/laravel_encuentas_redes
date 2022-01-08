<?php

namespace App\Repositories;

use App\Models\SocialNetwork;
use App\Repositories\BaseRepository;

/**
 * Class SocialNetworkRepository
 * @package App\Repositories
 * @version January 8, 2022, 9:43 am UTC
*/

class SocialNetworkRepository extends BaseRepository
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
        return SocialNetwork::class;
    }
}
