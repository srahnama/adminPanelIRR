<?php

namespace App\Repositories;

use App\Models\Picture;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PictureRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:06 am UTC
 *
 * @method Picture findWithoutFail($id, $columns = ['*'])
 * @method Picture find($id, $columns = ['*'])
 * @method Picture first($columns = ['*'])
*/
class PictureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'item_type',
        'item_id',
        'file_name',
        'order',
        'cover',
        'is_active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Picture::class;
    }
}
