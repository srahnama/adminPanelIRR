<?php

namespace App\Repositories;

use App\Models\RouteThemeRelation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteThemeRelationRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:11 am UTC
 *
 * @method RouteThemeRelation findWithoutFail($id, $columns = ['*'])
 * @method RouteThemeRelation find($id, $columns = ['*'])
 * @method RouteThemeRelation first($columns = ['*'])
*/
class RouteThemeRelationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'route_id',
        'route_theme_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RouteThemeRelation::class;
    }
}
