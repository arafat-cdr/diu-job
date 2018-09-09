<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HireWorker extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function client() {

    	return $this->belongsTo('App\User', 'client_id', 'id');
    }

    public function worker() {

    	return $this->belongsTo('App\User', 'worker_id', 'id');
    }
}
