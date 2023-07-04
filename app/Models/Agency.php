<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agency
 *
 * @property $id
 * @property $Name
 * @property $Address
 * @property $Number_Phone
 * @property $Municipality
 * @property $Department
 * @property $created_at
 * @property $updated_at
 *
 * @property Transport[] $transports
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agency extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Address' => 'required',
		'Number_Phone' => 'required',
		'Municipality' => 'required',
		'Department' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Address','Number_Phone','Municipality','Department'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transports()
    {
        return $this->hasMany('App\Models\Transport', 'agencie', 'id');
    }
    

}
