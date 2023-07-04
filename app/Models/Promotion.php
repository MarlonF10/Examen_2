<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promotion
 *
 * @property $id
 * @property $Description
 * @property $Cost
 * @property $Date_from
 * @property $Date_to
 * @property $Image
 * @property $Enable
 * @property $Register_date
 * @property $rout
 * @property $customer
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Reservation[] $reservations
 * @property Rout $rout
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Promotion extends Model
{
    
    static $rules = [
		'Description' => 'required',
		'Cost' => 'required',
		'Date_from' => 'required',
		'Date_to' => 'required',
		'Image' => 'required',
		'Enable' => 'required',
		'Register_date' => 'required',
		'rout' => 'required',
		'customer' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Description','Cost','Date_from','Date_to','Image','Enable','Register_date','rout','customer'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'customer');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation', 'promotion', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rout()
    {
        return $this->hasOne('App\Models\Rout', 'id', 'rout');
    }
    

}
