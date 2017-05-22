<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	public function getComments()
	{
		return $this->hasMany('App\Comments', 'post_id', 'id');
	}
}
