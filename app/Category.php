<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function user() {

    	return hasOne('App\User');
    }

    public function skillList() {

    	return hasOne('App\SkillList');
    }
}
