<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TripThemeRelation
 * @package App\Models
 * @version December 29, 2017, 9:09 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string trip_type
 * @property integer trip_id
 * @property integer theme_id
 */
class TripThemeRelation extends Model
{
    use SoftDeletes;

    public $table = 'trip_theme_relations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'trip_type',
        'trip_id',
        'theme_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trip_type' => 'string',
        'trip_id' => 'integer',
        'theme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
