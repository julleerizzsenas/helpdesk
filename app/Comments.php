<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";

    	protected $fillable = [ 'posts_id' , 
    							'comments' ,
    							'user' , 
    							'image' , 
    	]

    	public function getComments()
    	{
    		return $this->hasMany('App\Comments', 'post_id', 'id');
    	}
}
