<?php

namespace App;
use Moloquent;

use Illuminate\Database\Eloquent\Model;

class Course extends Moloquent
{
    protected $collection = "courses";

    protected $guarded = [];

    public function getRouteKeyName()
    {

    	return 'name';

    }
}
