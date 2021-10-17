<?php

namespace App\Repositories;

use App\Models\Admissions;
use App\Repositories\BaseRepository;

/**
 * Class AdmissionsRepository
 * @package App\Repositories
 * @version May 8, 2021, 3:24 pm UTC
*/

class AdmissionsRepository extends BaseRepository
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
        'class_id',
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
        return Admissions::class;
    }
}
