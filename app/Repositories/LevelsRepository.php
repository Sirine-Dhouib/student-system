<?php

namespace App\Repositories;

use App\Models\Levels;
use App\Repositories\BaseRepository;

/**
 * Class LevelsRepository
 * @package App\Repositories
 * @version May 8, 2021, 3:16 pm UTC
*/

class LevelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    
    protected $primarykey ='level_id';
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
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
        return Levels::class;
    }
}
