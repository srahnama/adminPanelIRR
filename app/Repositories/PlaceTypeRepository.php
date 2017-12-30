<?php

namespace App\Repositories;

use App\Models\PlaceType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlaceTypeRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:04 am UTC
 *
 * @method PlaceType findWithoutFail($id, $columns = ['*'])
 * @method PlaceType find($id, $columns = ['*'])
 * @method PlaceType first($columns = ['*'])
*/
class PlaceTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'parent_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlaceType::class;
    }
}
