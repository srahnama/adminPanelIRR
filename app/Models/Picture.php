<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Picture
 * @package App\Models
 * @version December 29, 2017, 9:06 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string item_type
 * @property integer item_id
 * @property string file_name
 * @property integer order
 * @property integer cover
 * @property boolean is_active
 */
class Picture extends Model
{
    use SoftDeletes;

    public $table = 'pictures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'item_type',
        'item_id',
        'file_name',
        'order',
        'cover',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_type' => 'string',
        'item_id' => 'integer',
        'file_name' => 'string',
        'order' => 'integer',
        'cover' => 'integer',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
