<?php

namespace App\Repositories;

use App\Models\PlaceTypeRelation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlaceTypeRelationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:14 am UTC
 *
 * @method PlaceTypeRelation findWithoutFail($id, $columns = ['*'])
 * @method PlaceTypeRelation find($id, $columns = ['*'])
 * @method PlaceTypeRelation first($columns = ['*'])
*/
class PlaceTypeRelationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cat_id',
        'place_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlaceTypeRelation::class;
    }
}
