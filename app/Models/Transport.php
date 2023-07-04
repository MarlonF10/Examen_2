<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transport
 *
 * @property $id
 * @property $Brand
 * @property $Model
 * @property $Enabled
 * @property $Condition
 * @property $Papels_Transport
 * @property $Register_date
 * @property $passenger
 * @property $driver
 * @property $mechanic
 * @property $agency
 * @property $created_at
 * @property $updated_at
 *
 * @property Agency $agency
 * @property Driver $driver
 * @property Mechanic $mechanic
 * @property Passenger $passenger
 * @property Service[] $services
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transport extends Model
{
    
    static $rules = [
		'Brand' => 'required',
		'Model' => 'required',
		'Enabled' => 'required',
		'Condition' => 'required',
		'Papels_Transport' => 'required',
		'Register_date' => 'required',
		'passenger' => 'required',
		'driver' => 'required',
		'mechanic' => 'required',
		'agency' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Brand','Model','Enabled','Condition','Papels_Transport','Register_date','passenger','driver','mechanic','agency'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agency()
    {
        return $this->hasOne('App\Models\Agency', 'id', 'agency');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function driver()
    {
        return $this->hasOne('App\Models\Driver', 'id', 'driver');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mechanic()
    {
        return $this->hasOne('App\Models\Mechanic', 'id', 'mechanic');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function passenger()
    {
        return $this->hasOne('App\Models\Passenger', 'id', 'passenger');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'transport', 'id');
    }
    

}
