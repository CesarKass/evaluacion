<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcontrolcarga
 *
 * @property $id_Control_Carga
 * @property $id_Usuario
 * @property $anio
 * @property $total
 *
 * @property Tblusuario $tblusuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblcontrolcarga extends Model
{
    
    static $rules = [
		'id_Control_Carga' => 'required',
		'id_Usuario' => 'required',
		'anio' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Control_Carga','id_Usuario','anio','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tblusuario()
    {
        return $this->hasOne('App\Models\Tblusuario', 'id_usuario', 'id_Usuario');
    }
    

}
