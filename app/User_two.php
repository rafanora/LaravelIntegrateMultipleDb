<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_two extends Model
{
    protected $connection = 'laravelconverterdb_two';
    protected $table = 'users';
    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany('App\Models\Phone_two');
    }
}
