<?php

namespace App\Repositories;

use App\Models\UserPref;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserPrefRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:19 am UTC
 *
 * @method UserPref findWithoutFail($id, $columns = ['*'])
 * @method UserPref find($id, $columns = ['*'])
 * @method UserPref first($columns = ['*'])
*/
class UserPrefRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'pass_no',
        'major',
        'education',
        'birthdate',
        'native_lang',
        'nationality',
        'country',
        'province',
        'city',
        'street',
        'street2',
        'address_more',
        'po_code',
        'rate',
        'review',
        'bio',
        'phone',
        'gender',
        'image_url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserPref::class;
    }
}
