<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TravelListing
 *
 * @property $id
 * @property $Giveaways
 * @property $Name_of_the_place
 * @property $Departure_time
 * @property $Expected_arrival_time
 * @property $Register_date
 * @property $passenger
 * @property $created_at
 * @property $updated_at
 *
 * @property Passenger $passenger
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TravelListing extends Model
{
    
    static $rules = [
		'Giveaways' => 'required',
		'Name_of_the_place' => 'required',
		'Departure_time' => 'required',
		'Expected_arrival_time' => 'required',
		'Register_date' => 'required',
		'passenger' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Giveaways','Name_of_the_place','Departure_time','Expected_arrival_time','Register_date','passenger'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function passenger()
    {
        return $this->hasOne('App\Models\Passenger', 'id', 'passenger');
    }
    

}
