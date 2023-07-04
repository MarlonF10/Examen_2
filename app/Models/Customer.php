<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $Name
 * @property $First_Name
 * @property $Second_Name
 * @property $Address
 * @property $email
 * @property $Number_Phone
 * @property $Gender
 * @property $Municipality
 * @property $Department
 * @property $DNI
 * @property $Age
 * @property $created_at
 * @property $updated_at
 *
 * @property Promotion[] $promotions
 * @property Reservation[] $reservations
 * @property Service[] $services
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'First_Name' => 'required',
		'Second_Name' => 'required',
		'Address' => 'required',
		'email' => 'required',
		'Number_Phone' => 'required',
		'Gender' => 'required',
		'Municipality' => 'required',
		'Department' => 'required',
		'DNI' => 'required',
		'Age' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','First_Name','Second_Name','Address','email','Number_Phone','Gender','Municipality','Department','DNI','Age'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotions()
    {
        return $this->hasMany('App\Models\Promotion', 'customer', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation', 'customer', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'customer', 'id');
    }
    

}
