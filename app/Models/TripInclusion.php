<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TripInclusion
 * @package App\Models
 * @version December 29, 2017, 9:07 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string type
 * @property integer trip_id
 * @property string status
 * @property integer inclusion_id
 */
class TripInclusion extends Model
{
    use SoftDeletes;

    public $table = 'trip_inclusions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'trip_id',
        'status',
        'inclusion_id'
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
        'inclusion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
