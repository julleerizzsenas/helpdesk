<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = [];
    public $timestamps = false;

    // public function getPosts()
    // {
    // 	return $this->belongsTo(Post::class);
    // }

    public function posts()
 	{
 		return $this->belongsToMany(Post::class);
 	}

}
