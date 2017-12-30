<?php

namespace App\Repositories;

use App\Models\TripAvailabilitie;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TripAvailabilitieRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:02 am UTC
 *
 * @method TripAvailabilitie findWithoutFail($id, $columns = ['*'])
 * @method TripAvailabilitie find($id, $columns = ['*'])
 * @method TripAvailabilitie first($columns = ['*'])
*/
class TripAvailabilitieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'trip_id',
        'availability',
        'status',
        'capacity',
        'sold'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TripAvailabilitie::class;
    }
}
