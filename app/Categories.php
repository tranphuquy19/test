<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function test(){
        return $this->hasMany('App\test', 'id_categories', 'id');
    }
}
