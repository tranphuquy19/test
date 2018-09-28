<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';  

    public function categories(){
        return $this->belongsTo('App\Categories', 'id_categories', 'id');
    }

    public function auth(){ 
        return $this->belongsTo('App\User', 'auth', 'id');
    }
}
