<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Driver
 *
 * @property $id
 * @property $Name
 * @property $First_Name
 * @property $Second_Name
 * @property $DNI
 * @property $Number_Phone
 * @property $Email
 * @property $Address
 * @property $Gender
 * @property $License
 * @property $Municipality
 * @property $Department
 * @property $Age
 * @property $created_at
 * @property $updated_at
 *
 * @property Transport[] $transports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Driver extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'First_Name' => 'required',
		'Second_Name' => 'required',
		'DNI' => 'required',
		'Number_Phone' => 'required',
		'Email' => 'required',
		'Address' => 'required',
		'Gender' => 'required',
		'License' => 'required',
		'Municipality' => 'required',
		'Department' => 'required',
		'Age' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','First_Name','Second_Name','DNI','Number_Phone','Email','Address','Gender','License','Municipality','Department','Age'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transports()
    {
        return $this->hasMany('App\Models\Transport', 'driver', 'id');
    }
    

}
