<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RouteTodo
 * @package App\Models
 * @version December 29, 2017, 9:16 am UTC
 *
 * @property \App\Models\Route route
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property integer route_id
 * @property string type
 * @property string ir_hashtag
 * @property string name
 * @property string description
 * @property integer creator_id
 */
class RouteTodo extends Model
{
    use SoftDeletes;

    public $table = 'route_todos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'route_id',
        'type',
        'ir_hashtag',
        'name',
        'description',
        'creator_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'route_id' => 'integer',
        'type' => 'string',
        'ir_hashtag' => 'string',
        'name' => 'string',
        'description' => 'string',
        'creator_id' => 'integer'
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
}
