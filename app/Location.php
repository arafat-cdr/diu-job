<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function user() {

    	return hasOne('App\User');
    }
}
