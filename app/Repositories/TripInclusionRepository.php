<?php

namespace App\Repositories;

use App\Models\TripInclusion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TripInclusionRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:07 am UTC
 *
 * @method TripInclusion findWithoutFail($id, $columns = ['*'])
 * @method TripInclusion find($id, $columns = ['*'])
 * @method TripInclusion first($columns = ['*'])
*/
class TripInclusionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'trip_id',
        'status',
        'inclusion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TripInclusion::class;
    }
}
