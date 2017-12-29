<?php

namespace App\Repositories;

use App\Models\RouteLocation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteLocationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:17 am UTC
 *
 * @method RouteLocation findWithoutFail($id, $columns = ['*'])
 * @method RouteLocation find($id, $columns = ['*'])
 * @method RouteLocation first($columns = ['*'])
*/
class RouteLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'route_id',
        'place_id',
        'order',
        'type',
        'duration',
        'visiting_time',
        'content'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RouteLocation::class;
    }
}
