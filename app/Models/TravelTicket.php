<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TravelTicket
 *
 * @property $id
 * @property $Date
 * @property $Departure_time
 * @property $Expected_arrival_time
 * @property $Imported
 * @property $Register_date
 * @property $rout
 * @property $created_at
 * @property $updated_at
 *
 * @property Rout $rout
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TravelTicket extends Model
{
    
    static $rules = [
		'Date' => 'required',
		'Departure_time' => 'required',
		'Expected_arrival_time' => 'required',
		'Imported' => 'required',
		'Register_date' => 'required',
		'rout' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date','Departure_time','Expected_arrival_time','Imported','Register_date','rout'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rout()
    {
        return $this->hasOne('App\Models\Rout', 'id', 'rout');
    }
    

}
