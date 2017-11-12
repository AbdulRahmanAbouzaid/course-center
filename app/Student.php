<?php

namespace App;

use Moloquent;

use Illuminate\Database\Eloquent\Model;

class Student extends Moloquent
{
	protected $collection = "students";
    
    protected $guarded = [];


}
