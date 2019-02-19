<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    const ADMIN_TYPE = 1; //1 is admin...
    const NORMAL_USER_TYPE = 2;

    public function auth_test(){
        return $this->hasMany('App\Test', 'auth', 'id');
    }

    public function auth_results(){
        return $this->hasMany('App\Results', 'auth', 'id');
    }
    
    public function isAdmin(){
        return $this->role === self::ADMIN_TYPE;
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
