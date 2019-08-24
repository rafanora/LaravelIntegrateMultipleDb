<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone_two extends Model
{   
    protected $connection = 'laravelconverterdb_two';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User_two', 'id');
    }
}
