<?php

namespace App\Repositories;

use App\Models\PlacesPart;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlacesPartRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:12 am UTC
 *
 * @method PlacesPart findWithoutFail($id, $columns = ['*'])
 * @method PlacesPart find($id, $columns = ['*'])
 * @method PlacesPart first($columns = ['*'])
*/
class PlacesPartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'place_id',
        'name',
        'content',
        'creator_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlacesPart::class;
    }
}
