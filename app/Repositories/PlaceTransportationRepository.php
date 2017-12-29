<?php

namespace App\Repositories;

use App\Models\PlaceTransportation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlaceTransportationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:08 am UTC
 *
 * @method PlaceTransportation findWithoutFail($id, $columns = ['*'])
 * @method PlaceTransportation find($id, $columns = ['*'])
 * @method PlaceTransportation first($columns = ['*'])
*/
class PlaceTransportationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'item_id',
        'from',
        'transportation_type',
        'fee',
        'creator_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlaceTransportation::class;
    }
}
