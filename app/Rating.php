<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];
    
    public function user() {

    	return $this->belongsTo('App\User');
    }

    #for this no inverse query are written ...
    public function client() {

    	return $this->belongsTo('App\User', 'client_id', 'id');
    }

    public function jobPost() {

    	return $this->belongsTo('App\JobPost');
    }
}
