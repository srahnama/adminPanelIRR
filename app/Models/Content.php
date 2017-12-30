<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Content
 * @package App\Models
 * @version December 29, 2017, 9:08 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection placeTypeRelations
 * @property \Illuminate\Database\Eloquent\Collection routeLocations
 * @property \Illuminate\Database\Eloquent\Collection routeThemeRelations
 * @property \Illuminate\Database\Eloquent\Collection userMessages
 * @property string content_name
 * @property string url
 * @property string hierarchy_path
 * @property string title
 * @property string content
 * @property boolean is_published
 * @property integer creator_id
 */
class Content extends Model
{
    use SoftDeletes;

    public $table = 'contents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'content_name',
        'url',
        'hierarchy_path',
        'title',
        'content',
        'is_published',
        'creator_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'content_name' => 'string',
        'url' => 'string',
        'hierarchy_path' => 'string',
        'title' => 'string',
        'content' => 'string',
        'is_published' => 'boolean',
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
