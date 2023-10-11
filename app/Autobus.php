<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autobus
 *
 * @property $id
 * @property $descripcion
 * @property $capacidad
 * @property $placa
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autobus extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'capacidad' => 'required',
		'placa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','capacidad','placa'];



}
