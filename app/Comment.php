<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	public function getComments()
	{
		return $this->hasMany('App\Comment', 'post_id', 'id');
	}
}
