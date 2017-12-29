<?php

namespace App\Repositories;

use App\Models\UserExperience;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserExperienceRepository
 * @package App\Repositories
 * @version December 29, 2017, 9:15 am UTC
 *
 * @method UserExperience findWithoutFail($id, $columns = ['*'])
 * @method UserExperience find($id, $columns = ['*'])
 * @method UserExperience first($columns = ['*'])
*/
class UserExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'lic_nature',
        'lic_culture',
        'art_music',
        'architecture',
        'museum',
        'unesco',
        'religues',
        'eastern_bazaar',
        'food_drink',
        'handicraft',
        'nomad',
        'adventure',
        'hiking',
        'cycling',
        'safari',
        'desert',
        'hours',
        'sport',
        'ecotourism',
        'sking',
        'fishing',
        'spirtual',
        'festival',
        'solo',
        'horror',
        'rail',
        'relax',
        'slow',
        'social_science',
        'history',
        'geography',
        'archeology',
        'juries_prudence',
        'linguistic',
        'ethnology',
        'biography'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserExperience::class;
    }
}
