<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    public function getPosts()
    {
    	return $this->belongsTo('App\Posts', 'id' , 'post_id');
    }
}
