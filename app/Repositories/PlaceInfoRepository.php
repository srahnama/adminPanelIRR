<?php

namespace App\Repositories;

use App\Models\PlaceInfo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlaceInfoRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:18 am UTC
 *
 * @method PlaceInfo findWithoutFail($id, $columns = ['*'])
 * @method PlaceInfo find($id, $columns = ['*'])
 * @method PlaceInfo first($columns = ['*'])
*/
class PlaceInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'place_id',
        'duration',
        'spring_time1',
        'spring_time2',
        'summer_time1',
        'summer_time2',
        'autumn_time1',
        'autumn_time2',
        'winter_time1',
        'winter_time2',
        'best_time',
        'website',
        'tel',
        'food_drink',
        'ticket_cost',
        'additional_info',
        'content'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlaceInfo::class;
    }
}
