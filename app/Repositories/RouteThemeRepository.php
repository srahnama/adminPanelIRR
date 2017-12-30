<?php

namespace App\Repositories;

use App\Models\RouteTheme;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RouteThemeRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:03 am UTC
 *
 * @method RouteTheme findWithoutFail($id, $columns = ['*'])
 * @method RouteTheme find($id, $columns = ['*'])
 * @method RouteTheme first($columns = ['*'])
*/
class RouteThemeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'image_url',
        'parent_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RouteTheme::class;
    }
}
