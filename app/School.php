<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable=['sname','semail','sphone','sprofile','postid'];

    public function post() {
		return $this->belongsTo('App\Post', 'postid', 'id');
	}

}

