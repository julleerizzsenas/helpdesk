<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];

	public $timestamps = true;

	public function tags()
	{
		return $this->hasMany(Tag::class);
	}

	public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
