<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Passenger
 *
 * @property $id
 * @property $Name
 * @property $First_Name
 * @property $Second_Name
 * @property $DNI
 * @property $Number_Phone
 * @property $Gender
 * @property $Email
 * @property $created_at
 * @property $updated_at
 *
 * @property Service[] $services
 * @property Transport[] $transports
 * @property TravelListing[] $travelListings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Passenger extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'First_Name' => 'required',
		'Second_Name' => 'required',
		'DNI' => 'required',
		'Number_Phone' => 'required',
		'Gender' => 'required',
		'Email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','First_Name','Second_Name','DNI','Number_Phone','Gender','Email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'passenger', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transports()
    {
        return $this->hasMany('App\Models\Transport', 'passenger', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travelListings()
    {
        return $this->hasMany('App\Models\TravelListing', 'passenger', 'id');
    }
    

}
