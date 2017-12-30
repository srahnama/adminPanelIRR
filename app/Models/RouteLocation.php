<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RouteLocation
 * @package App\Models
 * @version December 29, 2017, 9:17 am UTC
 *
 * @property \App\Models\Place place
 * @property \App\Models\Route route
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer route_id
 * @property integer place_id
 * @property integer order
 * @property string type
 * @property string duration
 * @property string visiting_time
 * @property string content
 */
class RouteLocation extends Model
{
    use SoftDeletes;

    public $table = 'route_locations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'route_id',
        'place_id',
        'order',
        'type',
        'duration',
        'visiting_time',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'route_id' => 'integer',
        'place_id' => 'integer',
        'order' => 'integer',
        'type' => 'string',
        'duration' => 'string',
        'visiting_time' => 'string',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function route()
    {
        return $this->belongsTo(\App\Models\Route::class);
    }
}
