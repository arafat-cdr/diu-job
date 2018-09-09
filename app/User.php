<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $dates   = ['deleted_at'];

    protected $guarded = [];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function category() {

        return hasOne('App\Category');
    }

    public function location() {

        return hasOne('App\Location');
    }

    public function userSkill() {

        return hasOne('App\UserSkill');
    }

    public function jobPost() {

        return hasOne('App\JobPost');
    }

    public function rating() {

        return hasOne('App\Rating');
    }
}
