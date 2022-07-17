<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblgrupossistema
 *
 * @property $cve_grupo_sistema
 * @property $descripcion_grupo
 * @property $activo
 *
 * @property User[] $users
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblgrupossistema extends Model
{
    
    static $rules = [
		'cve_grupo_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cve_grupo_sistema','descripcion_grupo','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User', 'cve_grupo', 'cve_grupo_sistema');
    }
    

}
