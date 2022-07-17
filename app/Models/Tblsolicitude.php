<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * Class Tblsolicitude
 *
 * @property $id_solicitud
 * @property $id_Usuario_Asignado
 * @property $nombre_Solicitante
 * @property $paterno_Solicitante
 * @property $materno_Solicitante
 * @property $activo
 * @property $fecha_Solicitud
 *
 * @property Tblusuario $tblusuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblsolicitude extends Model
{
    
    static $rules = [
		'id_solicitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_solicitud','id_Usuario_Asignado','nombre_Solicitante','paterno_Solicitante','materno_Solicitante','activo','fecha_Solicitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id_usuario', 'id_Usuario_Asignado');
    }
    

}
