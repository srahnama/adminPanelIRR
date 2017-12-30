<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RouteTheme
 * @package App\Models
 * @version December 29, 2017, 9:03 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection RouteThemeRelation
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string name
 * @property string description
 * @property string image_url
 * @property integer parent_id
 */
class RouteTheme extends Model
{
    use SoftDeletes;

    public $table = 'route_themes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'image_url',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'image_url' => 'string',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routeThemeRelations()
    {
        return $this->hasMany(\App\Models\RouteThemeRelation::class);
    }
}
