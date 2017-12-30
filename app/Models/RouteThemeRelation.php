<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RouteThemeRelation
 * @package App\Models
 * @version December 29, 2017, 9:11 am UTC
 *
 * @property \App\Models\Route route
 * @property \App\Models\RouteTheme routeTheme
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer route_id
 * @property integer route_theme_id
 */
class RouteThemeRelation extends Model
{
    use SoftDeletes;

    public $table = 'route_theme_relations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'route_id',
        'route_theme_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'route_id' => 'integer',
        'route_theme_id' => 'integer'
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
    public function route()
    {
        return $this->belongsTo(\App\Models\Route::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function routeTheme()
    {
        return $this->belongsTo(\App\Models\RouteTheme::class);
    }
}
