<?php

namespace App\Repositories;

use App\Models\Teachers;
use App\Repositories\BaseRepository;

/**
 * Class TeachersRepository
 * @package App\Repositories
 * @version May 8, 2021, 3:27 pm UTC
*/

class TeachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'phone',
        'date_enregistered',
        'user_id',
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
        return Teachers::class;
    }
}
