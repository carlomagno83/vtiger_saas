<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Company",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="usuario",
 *          description="usuario",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="database_name",
 *          description="database_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="razon_social",
 *          description="razon_social",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="contacto",
 *          description="contacto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefono",
 *          description="telefono",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ruc",
 *          description="ruc",
 *          type="string"
 *      )
 * )
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'usuario',
        'database_name',
        'razon_social',
        'contacto',
        'telefono',
        'ruc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'usuario' => 'string',
        'database_name' => 'string',
        'razon_social' => 'string',
        'contacto' => 'string',
        'telefono' => 'string',
        'ruc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'usuario' => 'required|unique:companies,usuario'
    ];

    
}
