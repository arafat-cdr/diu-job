<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSkill extends Model
{
    use SoftDeletes;

    protected $guarded	=	[];
    protected $dates    = ['deleted_at'];

    public function user() {

    	return $this->belongsTo('App\User');
    }

    public function skillList() {
    	
    	return $this->belongsTo('App\SkillList');
    }
}
