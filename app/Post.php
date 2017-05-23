<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];

	public $timestamps = true;

	public function getTags()
	{
		return $this->hasMany(Tag::class);
	}
}
