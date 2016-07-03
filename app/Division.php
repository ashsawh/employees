<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "dept_emp";
    protected $primaryKey = "emp_no";
    protected $dates = [ 'from_date', 'to_date' ];

    public function department()
    {
        return $this->hasOne('App\Department', 'dept_no', 'dept_no');
    }
}
