<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlaceTransportation
 * @package App\Models
 * @version December 29, 2017, 9:08 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string type
 * @property string item_id
 * @property string from
 * @property string transportation_type
 * @property float fee
 * @property integer creator_id
 */
class PlaceTransportation extends Model
{
    use SoftDeletes;

    public $table = 'place_transportations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'item_id',
        'from',
        'transportation_type',
        'fee',
        'creator_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'item_id' => 'string',
        'from' => 'string',
        'transportation_type' => 'string',
        'fee' => 'float',
        'creator_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
