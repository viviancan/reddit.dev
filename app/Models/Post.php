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

}

