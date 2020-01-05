<?php

namespace App\Repositories;

use App\Models\Citation;
use App\Repositories\BaseRepository;

/**
 * Class CitationRepository
 * @package App\Repositories
 * @version January 5, 2020, 8:54 pm UTC
*/

class CitationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'citation',
        'auteur',
        'traduction',
        'type'
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
        return Citation::class;
    }
}
