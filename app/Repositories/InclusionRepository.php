<?php

namespace App\Repositories;

use App\Models\Inclusion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InclusionRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:04 am UTC
 *
 * @method Inclusion findWithoutFail($id, $columns = ['*'])
 * @method Inclusion find($id, $columns = ['*'])
 * @method Inclusion first($columns = ['*'])
*/
class InclusionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'name',
        'is_active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Inclusion::class;
    }
}
