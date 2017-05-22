<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = "posts";

	protected $fillable = [ 'topicname' , 
							'description' ,
							'user' , 
							'image' 
	];

	public $timestamps = true;

	public function getTags()
	{
		return $this->hasMany('App\Tags', 'post_id', 'id');
	}
}
