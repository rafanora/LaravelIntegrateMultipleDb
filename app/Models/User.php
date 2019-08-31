<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'laravelconverterdb_one';
    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }
}