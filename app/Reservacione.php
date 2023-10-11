<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservacione
 *
 * @property $id
 * @property $cliente_id
 * @property $ruta_id
 * @property $fechainicio
 * @property $fechafin
 * @property $preciobase
 * @property $cantidadpasajeros
 * @property $estadoreserva
 * @property $costo_total
 * @property $created_at
 * @property $updated_at
 *
 * @property Pago[] $pagos
 * @property Ruta $ruta
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservacione extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'ruta_id' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'preciobase' => 'required',
		'cantidadpasajeros' => 'required',
		'estadoreserva' => 'required',
		'costo_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','ruta_id','fechainicio','fechafin','preciobase','cantidadpasajeros','estadoreserva','costo_total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Pago', 'reserva_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Ruta', 'id', 'ruta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'id', 'cliente_id');
    }
    

}
