<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $Star_Time
 * @property $End_Time
 * @property $Day
 * @property $Type_of_Services
 * @property $Basic_Cost
 * @property $Enable
 * @property $rout
 * @property $passenger
 * @property $customer
 * @property $transport
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Passenger $passenger
 * @property Rout $rout
 * @property Transport $transport
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'Star_Time' => 'required',
		'End_Time' => 'required',
		'Day' => 'required',
		'Type_of_Services' => 'required',
		'Basic_Cost' => 'required',
		'Enable' => 'required',
		'rout' => 'required',
		'passenger' => 'required',
		'customer' => 'required',
		'transport' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Star_Time','End_Time','Day','Type_of_Services','Basic_Cost','Enable','rout','passenger','customer','transport'];


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
    public function passenger()
    {
        return $this->hasOne('App\Models\Passenger', 'id', 'passenger');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rout()
    {
        return $this->hasOne('App\Models\Rout', 'id', 'rout');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transport()
    {
        return $this->hasOne('App\Models\Transport', 'id', 'transport');
    }
    

}
