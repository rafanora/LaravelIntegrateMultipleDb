<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_two extends Model
{
    protected $connection = 'laravelconverterdb_two';
    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany('App\Models\Phone_two', 'user_id');
    }
}
