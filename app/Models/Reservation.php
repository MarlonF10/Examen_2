<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 *
 * @property $id
 * @property $No_Reservation
 * @property $Advance
 * @property $Register_date
 * @property $customer
 * @property $promotion
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Promotion $promotion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservation extends Model
{
    
    static $rules = [
		'No_Reservation' => 'required',
		'Advance' => 'required',
		'Register_date' => 'required',
		'customer' => 'required',
		'promotion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['No_Reservation','Advance','Register_date','customer','promotion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'customer');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function promotion()
    {
        return $this->hasOne('App\Models\Promotion', 'id', 'promotion');
    }
    

}
