<?php

namespace App\Repositories;

use App\Models\TripThemeRelation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TripThemeRelationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:09 am UTC
 *
 * @method TripThemeRelation findWithoutFail($id, $columns = ['*'])
 * @method TripThemeRelation find($id, $columns = ['*'])
 * @method TripThemeRelation first($columns = ['*'])
*/
class TripThemeRelationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trip_type',
        'trip_id',
        'theme_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TripThemeRelation::class;
    }
}
