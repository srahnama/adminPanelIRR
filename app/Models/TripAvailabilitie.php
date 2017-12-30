<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TripAvailabilitie
 * @package App\Models
 * @version December 29, 2017, 9:02 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string type
 * @property integer trip_id
 * @property string|\Carbon\Carbon availability
 * @property string status
 * @property integer capacity
 * @property integer sold
 */
class TripAvailabilitie extends Model
{
    use SoftDeletes;

    public $table = 'trip_availabilities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'trip_id',
        'availability',
        'status',
        'capacity',
        'sold'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'trip_id' => 'integer',
        'status' => 'string',
        'capacity' => 'integer',
        'sold' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
