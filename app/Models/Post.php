<?php

namespace App\Models;

use App\Models\BaseModel;

class Post extends BaseModel
{
	protected $table = 'posts';

	public static $rules = [

		'title' => 'required|min:2|max:200',
		'content' => 'required',
		'url' => 'required'


	];

	public function user()
	{
		return $this->belongsTo('\App\User', 'created_by');
	}

	public function votes()
	{
		return $this->hasMany('App\Models\Vote', 'vote_id');
	}

	public static function search($search)
	{

		$posts = Post::with('user')
			->where('title','like', "%$search%")
			->orWhere('content', 'like', "%$search%")
			->orWhere('url', 'like', "%$search%")


			->orWhereHas('user' , function($query) use ($search) {
				$query->where('name', 'like', "%$search%");
			})
			->orderBy('created_at','DESC')
			->paginate(4);	

        return $posts; 
	}

}
