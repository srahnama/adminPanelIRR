<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserPref
 * @package App\Models
 * @version December 29, 2017, 9:19 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer user_id
 * @property string pass_no
 * @property string major
 * @property string education
 * @property date birthdate
 * @property string native_lang
 * @property string nationality
 * @property string country
 * @property string province
 * @property string city
 * @property string street
 * @property string street2
 * @property string address_more
 * @property string po_code
 * @property float rate
 * @property integer review
 * @property string bio
 * @property string phone
 * @property string gender
 * @property string image_url
 */
class UserPref extends Model
{
    use SoftDeletes;

    public $table = 'user_prefs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'pass_no',
        'major',
        'education',
        'birthdate',
        'native_lang',
        'nationality',
        'country',
        'province',
        'city',
        'street',
        'street2',
        'address_more',
        'po_code',
        'rate',
        'review',
        'bio',
        'phone',
        'gender',
        'image_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'pass_no' => 'string',
        'major' => 'string',
        'education' => 'string',
        'birthdate' => 'date',
        'native_lang' => 'string',
        'nationality' => 'string',
        'country' => 'string',
        'province' => 'string',
        'city' => 'string',
        'street' => 'string',
        'street2' => 'string',
        'address_more' => 'string',
        'po_code' => 'string',
        'rate' => 'float',
        'review' => 'integer',
        'bio' => 'string',
        'phone' => 'string',
        'gender' => 'string',
        'image_url' => 'string'
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
