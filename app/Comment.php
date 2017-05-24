<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = [];

	public $timestamps = true;

	// public function comments()
	// {
	// 	return $this->hasMany('App\Comment', 'post_id', 'id');
	// }

	public function posts()
	{
		return $this->belongsTo(Post::class, 'post_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');

	}
}
