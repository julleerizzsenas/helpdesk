<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = [];
    
    public $timestamps = false;

    public function posts()
 	{
 		return $this->belongsToMany(Post::class);
 	}

 	public function user()
    {
    	return $this->belongsTo(User::class, 'user');
    }
    
    public function getRouteKeyName()
    {
    	return 'name';
    }
}
