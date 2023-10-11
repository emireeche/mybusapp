<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $correo
 * @property $password
 * @property $rolusuario
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservacione[] $reservaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'correo' => 'required',
		'rolusuario' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','correo','rolusuario','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservaciones()
    {
        return $this->hasMany('App\Reservacione', 'cliente_id', 'id');
    }
    

}
