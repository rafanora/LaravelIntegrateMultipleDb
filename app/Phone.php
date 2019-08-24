<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{   
    protected $connection = 'laravelconverterdb_one';
    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
