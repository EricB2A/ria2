<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Project extends Eloquent{
    protected $collection = 'projects';
    protected $connection = 'mongodb';
    
    public static function findOrNew($id){
        $pro = static::where('project_id', $id)->get()->last();
        return $pro ?: new static;
    }
}