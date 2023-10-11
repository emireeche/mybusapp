<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $preciobase
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservacione[] $reservaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'preciobase' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','preciobase'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservaciones()
    {
        return $this->hasMany('App\Reservacione', 'ruta_id', 'id');
    }
    

}
