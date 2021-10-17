<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Admissions
 * @package App\Models
 * @version May 8, 2021, 3:24 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $date_enregistered
 * @property integer $user_id
 * @property integer $class_id
 */
class Admissions extends Model
{
    use SoftDeletes;
    protected $primaryKey='student_id';
    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        
        'first_name',
        'last_name',
        'gender',
        'email',
        'phone',
        'date_enregistered',
        'user_id',
        'class_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'date_enregistered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'date_enregistered' => 'required',
        'user_id' => 'required|integer',
        'class_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
