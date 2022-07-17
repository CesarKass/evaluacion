<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblconfiguracioncarga
 *
 * @property $id_Configuracion_Carga
 * @property $proporcion
 * @property $diferencia
 * @property $anio
 * @property $activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblconfiguracioncarga extends Model
{
    
    static $rules = [
		'id_Configuracion_Carga' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Configuracion_Carga','proporcion','diferencia','anio','activo'];



}
