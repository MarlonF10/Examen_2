<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rout
 *
 * @property $id
 * @property $Route
 * @property $Route_Schedule
 * @property $Day
 * @property $Description
 * @property $Register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Promotion[] $promotions
 * @property Service[] $services
 * @property TravelTicket[] $travelTickets
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rout extends Model
{
    
    static $rules = [
		'Route' => 'required',
		'Route_Schedule' => 'required',
		'Day' => 'required',
		'Description' => 'required',
		'Register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Route','Route_Schedule','Day','Description','Register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotions()
    {
        return $this->hasMany('App\Models\Promotion', 'rout', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'rout', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travelTickets()
    {
        return $this->hasMany('App\Models\TravelTicket', 'rout', 'id');
    }
    

}
