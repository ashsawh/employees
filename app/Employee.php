<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class employee extends Model
{
    protected $primaryKey = "emp_no";
    protected $dates = [ 'birth_date', 'hire_date' ];
    protected $fillable = [ 'gender', 'birth_date', 'hire_date' ];

    public function titles()
    {
        return $this->hasMany('App\Title', 'emp_no');
    }

    public function division()
    {
        return $this->hasOne('App\Division', 'emp_no');
    }

    public function salaries()
    {
        return $this->hasMany('App\Salary', 'emp_no');
    }
    /*
    public function getBirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getHireDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
    */

    public function getGenderAttribute($value)
    {
	    return $value == 'M' ? 'Male' : ($value == 'F' ? 'Female' : 'Other');
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return $this->birth_date->diffInYears(Carbon::now());
    }
}
