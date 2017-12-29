<?php

namespace App\Repositories;

use App\Models\RouteTodo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteTodoRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:16 am UTC
 *
 * @method RouteTodo findWithoutFail($id, $columns = ['*'])
 * @method RouteTodo find($id, $columns = ['*'])
 * @method RouteTodo first($columns = ['*'])
*/
class RouteTodoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'route_id',
        'type',
        'ir_hashtag',
        'name',
        'description',
        'creator_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RouteTodo::class;
    }
}
