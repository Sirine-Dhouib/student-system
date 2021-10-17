<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Repositories\BaseRepository;

/**
 * Class CoursesRepository
 * @package App\Repositories
 * @version May 8, 2021, 3:19 pm UTC
*/

class CoursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey='course_id';
    protected $fieldSearchable = [
        'course_name',
        'course_code',
        'description',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Courses::class;
    }
}
