<?php

namespace App\Repositories;

use App\Models\TripTheme;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TripThemeRepository
 * @package App\Repositories
 * @version December 29, 2017, 8:54 am UTC
 *
 * @method TripTheme findWithoutFail($id, $columns = ['*'])
 * @method TripTheme find($id, $columns = ['*'])
 * @method TripTheme first($columns = ['*'])
*/
class TripThemeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'is_active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TripTheme::class;
    }
}
