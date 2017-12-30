<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserCar
 * @package App\Models
 * @version December 29, 2017, 9:16 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer user_id
 * @property string classification
 * @property string color
 * @property string plate_number
 * @property boolean wifi
 * @property boolean roof_rock
 * @property float fee_day
 * @property float fee_km
 * @property string insurance_type
 * @property date insurance_expiry
 * @property boolean active
 * @property boolean is_verify
 */
class UserCar extends Model
{
    use SoftDeletes;

    public $table = 'user_cars';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'classification',
        'color',
        'plate_number',
        'wifi',
        'roof_rock',
        'fee_day',
        'fee_km',
        'insurance_type',
        'insurance_expiry',
        'active',
        'is_verify'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'classification' => 'string',
        'color' => 'string',
        'plate_number' => 'string',
        'wifi' => 'boolean',
        'roof_rock' => 'boolean',
        'fee_day' => 'float',
        'fee_km' => 'float',
        'insurance_type' => 'string',
        'insurance_expiry' => 'date',
        'active' => 'boolean',
        'is_verify' => 'boolean'
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
