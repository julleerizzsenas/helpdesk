<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	protected $guarded = [];

	public $timestamps = true;

    public function comment()
	{
		return $this->belongsTo(Comment::class, 'comment_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}