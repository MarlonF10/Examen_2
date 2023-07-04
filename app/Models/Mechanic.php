<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mechanic
 *
 * @property $id
 * @property $Name
 * @property $First_Name
 * @property $Second_Name
 * @property $DNI
 * @property $Speciality
 * @property $email
 * @property $Number_Phone
 * @property $Address
 * @property $Municipality
 * @property $Department
 * @property $Gender
 * @property $Age
 * @property $created_at
 * @property $updated_at
 *
 * @property Transport[] $transports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mechanic extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'First_Name' => 'required',
		'Second_Name' => 'required',
		'DNI' => 'required',
		'Speciality' => 'required',
		'email' => 'required',
		'Number_Phone' => 'required',
		'Address' => 'required',
		'Municipality' => 'required',
		'Department' => 'required',
		'Gender' => 'required',
		'Age' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','First_Name','Second_Name','DNI','Speciality','email','Number_Phone','Address','Municipality','Department','Gender','Age'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transports()
    {
        return $this->hasMany('App\Models\Transport', 'mechanic', 'id');
    }
    

}
