<?php

namespace App\Repositories;

use App\Models\Company;
use InfyOm\Generator\Common\BaseRepository;

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'usuario',
        'database_name',
        'razon_social',
        'contacto',
        'telefono',
        'ruc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Company::class;
    }
}
