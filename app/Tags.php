<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = "tags";

    protected $fillable = [ 'post_id' , 
    						'name',
    						'user',

    ];

    public $timestamps = false;

    public function getPosts()
    {
    	return $this->belongsTo('App\Posts', 'id' , 'post_id');
    }
}
