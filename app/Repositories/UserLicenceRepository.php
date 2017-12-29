<?php

namespace App\Repositories;

use App\Models\UserLicence;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserLicenceRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:10 am UTC
 *
 * @method UserLicence findWithoutFail($id, $columns = ['*'])
 * @method UserLicence find($id, $columns = ['*'])
 * @method UserLicence first($columns = ['*'])
*/
class UserLicenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'type',
        'year',
        'lang',
        'fee',
        'file',
        'destinations',
        'is_verify'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserLicence::class;
    }
}
