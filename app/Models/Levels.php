<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Levels
 * @package App\Models
 * @version May 8, 2021, 3:16 pm UTC
 *
 * @property string $level
 * @property integer $course_id
 * @property string $level_description
 */
class Levels extends Model
{
    use SoftDeletes;
    protected $primaryKey='level_id';
    public $table = 'levels';
    

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $dates = ['deleted_at'];
    



    public $fillable = [
        'level',
        'course_id',
        'level_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    
    protected $casts = [
        'level_id' => 'integer',
        'level' => 'string',
        'course_id' => 'integer',
        'level_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'level' => 'required|string|max:255',
        'course_id' => 'required|integer',
        'level_description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
