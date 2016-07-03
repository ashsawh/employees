<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $primaryKey = "emp_no";
    protected $dates = [ 'from_date', 'to_date' ];

    public function employee()
    {
        return $this->hasOne('App\Employee', 'emp_no');
    }
}
