<?php

namespace App\Repositories;

use App\Models\UserCar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserCarRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:16 am UTC
 *
 * @method UserCar findWithoutFail($id, $columns = ['*'])
 * @method UserCar find($id, $columns = ['*'])
 * @method UserCar first($columns = ['*'])
*/
class UserCarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'classification',
        'color',
        'plate_number',
        'wifi',
        'roof_rock',
        'fee_day',
        'fee_km',
        'insurance_type',
        'insurance_expiry',
        'active',
        'is_verify'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserCar::class;
    }
}
