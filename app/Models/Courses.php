<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Courses
 * @package App\Models
 * @version May 8, 2021, 3:19 pm UTC
 *
 * @property string $course_name
 * @property string $course_code
 * @property string $description
 * @property boolean $status
 */
class Courses extends Model
{
    use SoftDeletes;
    protected $primaryKey='course_id';
    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_name',
        'course_code',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required|string|max:255',
        'course_code' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
