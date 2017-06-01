<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];

	public $timestamps = true;

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}

	public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, $filters)
 	{

 		if ($month = $filters['month']){
            $query->whereMonth('updated_at', Carbon::parse($month)->month);
        }

         if ($year = $filters['year']){
            $query->whereYear('updated_at', $year);
        }
 	}
    
}
