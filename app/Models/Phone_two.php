<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone_two extends Model
{   
    protected $connection = 'laravelconverterdb_two';
    protected $table = 'phones';
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
