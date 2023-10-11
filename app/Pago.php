<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $reserva_id
 * @property $montoapagar
 * @property $metododepago
 * @property $fechapago
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservacione $reservacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'reserva_id' => 'required',
		'montoapagar' => 'required',
		'metododepago' => 'required',
		'fechapago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reserva_id','montoapagar','metododepago','fechapago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reservacione()
    {
        return $this->hasOne('App\Reservacione', 'id', 'reserva_id');
    }
    

}
