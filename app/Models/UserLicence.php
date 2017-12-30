<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserLicence
 * @package App\Models
 * @version December 29, 2017, 9:10 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer user_id
 * @property string type
 * @property integer year
 * @property string lang
 * @property float fee
 * @property string file
 * @property string destinations
 * @property boolean is_verify
 */
class UserLicence extends Model
{
    use SoftDeletes;

    public $table = 'user_licences';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'type',
        'year',
        'lang',
        'fee',
        'file',
        'destinations',
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
        'type' => 'string',
        'year' => 'integer',
        'lang' => 'string',
        'fee' => 'float',
        'file' => 'string',
        'destinations' => 'string',
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
