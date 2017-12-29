<?php

namespace App\Repositories;

use App\Models\Place;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlaceRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:01 am UTC
 *
 * @method Place findWithoutFail($id, $columns = ['*'])
 * @method Place find($id, $columns = ['*'])
 * @method Place first($columns = ['*'])
*/
class PlaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category',
        'name',
        'description',
        'lat',
        'long',
        'parent_id',
        'country',
        'province',
        'city',
        'is_active',
        'ir_hashtag',
        'rate',
        'review'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Place::class;
    }
}
