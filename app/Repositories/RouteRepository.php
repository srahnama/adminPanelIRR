<?php

namespace App\Repositories;

use App\Models\Route;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:07 am UTC
 *
 * @method Route findWithoutFail($id, $columns = ['*'])
 * @method Route find($id, $columns = ['*'])
 * @method Route first($columns = ['*'])
*/
class RouteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'duration',
        'time_suggestion',
        'cost_food',
        'cost_ticket',
        'additional_info',
        'cover_url',
        'content',
        'is_published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Route::class;
    }
}
