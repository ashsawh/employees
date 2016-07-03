<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $primaryKey = "emp_no";
    protected $dates = [ 'from_date', 'to_date' ];

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'emp_no');
    }
}
