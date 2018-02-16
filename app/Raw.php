<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Raw extends Eloquent {
    protected $connection = 'mongodb';
    
}
