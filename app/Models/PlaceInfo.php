<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlaceInfo
 * @package App\Models
 * @version December 29, 2017, 9:18 am UTC
 *
 * @property \App\Models\Place place
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer place_id
 * @property string duration
 * @property string spring_time1
 * @property string spring_time2
 * @property string summer_time1
 * @property string summer_time2
 * @property string autumn_time1
 * @property string autumn_time2
 * @property string winter_time1
 * @property string winter_time2
 * @property string best_time
 * @property string website
 * @property string tel
 * @property string food_drink
 * @property string ticket_cost
 * @property string additional_info
 * @property string content
 */
class PlaceInfo extends Model
{
    use SoftDeletes;

    public $table = 'place_infos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'place_id',
        'duration',
        'spring_time1',
        'spring_time2',
        'summer_time1',
        'summer_time2',
        'autumn_time1',
        'autumn_time2',
        'winter_time1',
        'winter_time2',
        'best_time',
        'website',
        'tel',
        'food_drink',
        'ticket_cost',
        'additional_info',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'place_id' => 'integer',
        'duration' => 'string',
        'spring_time1' => 'string',
        'spring_time2' => 'string',
        'summer_time1' => 'string',
        'summer_time2' => 'string',
        'autumn_time1' => 'string',
        'autumn_time2' => 'string',
        'winter_time1' => 'string',
        'winter_time2' => 'string',
        'best_time' => 'string',
        'website' => 'string',
        'tel' => 'string',
        'food_drink' => 'string',
        'ticket_cost' => 'string',
        'additional_info' => 'string',
        'content' => 'string'
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
    public function place()
    {
        return $this->belongsTo(\App\Models\Place::class);
    }
}
