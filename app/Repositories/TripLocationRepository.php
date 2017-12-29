<?php

namespace App\Repositories;

use App\Models\TripLocation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TripLocationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:18 am UTC
 *
 * @method TripLocation findWithoutFail($id, $columns = ['*'])
 * @method TripLocation find($id, $columns = ['*'])
 * @method TripLocation first($columns = ['*'])
*/
class TripLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trip_type',
        'trip_id',
        'location_id',
        'order'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TripLocation::class;
    }
}
