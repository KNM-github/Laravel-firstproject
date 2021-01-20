<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable=['name','picture','description'];

  	public function schools() {
		$this->hasOne('App\School', 'id', 'postid');
	}
}

