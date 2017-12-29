<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Route
 * @package App\Models
 * @version December 29, 2017, 9:07 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection RouteLocation
 * @property \Illuminate\Database\Eloquent\Collection RouteThemeRelation
 * @property \Illuminate\Database\Eloquent\Collection RouteTodo
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string name
 * @property string duration
 * @property string time_suggestion
 * @property float cost_food
 * @property float cost_ticket
 * @property string additional_info
 * @property string cover_url
 * @property string content
 * @property boolean is_published
 */
class Route extends Model
{
    use SoftDeletes;

    public $table = 'routes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'duration',
        'time_suggestion',
        'cost_food',
        'cost_ticket',
        'additional_info',
        'cover_url',
        'content',
        'is_published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'duration' => 'string',
        'time_suggestion' => 'string',
        'cost_food' => 'float',
        'cost_ticket' => 'float',
        'additional_info' => 'string',
        'cover_url' => 'string',
        'content' => 'string',
        'is_published' => 'boolean'
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
    public function routeLocations()
    {
        return $this->hasMany(\App\Models\RouteLocation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routeThemeRelations()
    {
        return $this->hasMany(\App\Models\RouteThemeRelation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routeTodos()
    {
        return $this->hasMany(\App\Models\RouteTodo::class);
    }
}
