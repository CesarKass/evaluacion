<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblbitacora
 *
 * @property $id_Bitacora
 * @property $id_Usuario
 * @property $cve_accion
 * @property $fecha
 * @property $movimiento
 *
 * @property Tblaccione $tblaccione
 * @property Tblusuario $tblusuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblbitacora extends Model
{
    
    static $rules = [
		'id_Bitacora' => 'required',
		'id_Usuario' => 'required',
		'cve_accion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Bitacora','id_Usuario','cve_accion','fecha','movimiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tblaccione()
    {
        return $this->hasOne('App\Models\Tblaccione', 'cve_accion', 'cve_accion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tblusuario()
    {
        return $this->hasOne('App\Models\Tblusuario', 'id_usuario', 'id_Usuario');
    }
    

}
