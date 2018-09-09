<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillList extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function category() {

    	return $this->belongsTo('App\Category');
    }

    public function userSkill() {

    	return $this->hasOne('App\UserSkill');
    }
}
