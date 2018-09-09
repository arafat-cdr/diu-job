<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function user() {

    	return belongsTo('App\User');
    }

    public function rating() {

    	return hasOne('App\Rating');
    }
}
