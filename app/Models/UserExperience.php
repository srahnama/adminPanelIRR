<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserExperience
 * @package App\Models
 * @version December 29, 2017, 9:15 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer user_id
 * @property boolean lic_nature
 * @property boolean lic_culture
 * @property boolean art_music
 * @property boolean architecture
 * @property boolean museum
 * @property boolean unesco
 * @property boolean religues
 * @property boolean eastern_bazaar
 * @property boolean food_drink
 * @property boolean handicraft
 * @property boolean nomad
 * @property boolean adventure
 * @property boolean hiking
 * @property boolean cycling
 * @property boolean safari
 * @property boolean desert
 * @property boolean hours
 * @property boolean sport
 * @property boolean ecotourism
 * @property boolean sking
 * @property boolean fishing
 * @property boolean spirtual
 * @property boolean festival
 * @property boolean solo
 * @property boolean horror
 * @property boolean rail
 * @property boolean relax
 * @property boolean slow
 * @property boolean social_science
 * @property boolean history
 * @property boolean geography
 * @property boolean archeology
 * @property boolean juries_prudence
 * @property boolean linguistic
 * @property boolean ethnology
 * @property string biography
 */
class UserExperience extends Model
{
    use SoftDeletes;

    public $table = 'user_experiences';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'lic_nature' => 'boolean',
        'lic_culture' => 'boolean',
        'art_music' => 'boolean',
        'architecture' => 'boolean',
        'museum' => 'boolean',
        'unesco' => 'boolean',
        'religues' => 'boolean',
        'eastern_bazaar' => 'boolean',
        'food_drink' => 'boolean',
        'handicraft' => 'boolean',
        'nomad' => 'boolean',
        'adventure' => 'boolean',
        'hiking' => 'boolean',
        'cycling' => 'boolean',
        'safari' => 'boolean',
        'desert' => 'boolean',
        'hours' => 'boolean',
        'sport' => 'boolean',
        'ecotourism' => 'boolean',
        'sking' => 'boolean',
        'fishing' => 'boolean',
        'spirtual' => 'boolean',
        'festival' => 'boolean',
        'solo' => 'boolean',
        'horror' => 'boolean',
        'rail' => 'boolean',
        'relax' => 'boolean',
        'slow' => 'boolean',
        'social_science' => 'boolean',
        'history' => 'boolean',
        'geography' => 'boolean',
        'archeology' => 'boolean',
        'juries_prudence' => 'boolean',
        'linguistic' => 'boolean',
        'ethnology' => 'boolean',
        'biography' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
