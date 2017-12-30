<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Place
 * @package App\Models
 * @version December 29, 2017, 9:01 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection FreeTrip
 * @property \Illuminate\Database\Eloquent\Collection PlaceInfo
 * @property \Illuminate\Database\Eloquent\Collection PlaceTypeRelation
 * @property \Illuminate\Database\Eloquent\Collection PlacesPart
 * @property \Illuminate\Database\Eloquent\Collection RouteLocation
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection TripLocation
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string category
 * @property string name
 * @property string description
 * @property float lat
 * @property float long
 * @property integer parent_id
 * @property string country
 * @property string province
 * @property string city
 * @property boolean is_active
 * @property string ir_hashtag
 * @property string rate
 * @property string review
 */
class Place extends Model
{
    use SoftDeletes;

    public $table = 'places';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'category',
        'name',
        'description',
        'lat',
        'long',
        'parent_id',
        'country',
        'province',
        'city',
        'is_active',
        'ir_hashtag',
        'rate',
        'review'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'string',
        'name' => 'string',
        'description' => 'string',
        'lat' => 'float',
        'long' => 'float',
        'parent_id' => 'integer',
        'country' => 'string',
        'province' => 'string',
        'city' => 'string',
        'is_active' => 'boolean',
        'ir_hashtag' => 'string',
        'rate' => 'string',
        'review' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function freeTrips()
    {
        return $this->hasMany(\App\Models\FreeTrip::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placeInfos()
    {
        return $this->hasMany(\App\Models\PlaceInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placeTypeRelations()
    {
        return $this->hasMany(\App\Models\PlaceTypeRelation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placesParts()
    {
        return $this->hasMany(\App\Models\PlacesPart::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routeLocations()
    {
        return $this->hasMany(\App\Models\RouteLocation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tripLocations()
    {
        return $this->hasMany(\App\Models\TripLocation::class);
    }
}
