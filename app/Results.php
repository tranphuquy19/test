<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $table = 'results';
    
    public function auth(){
        return $this->belongsTo('App\User', 'auth', 'id');
    }
}
