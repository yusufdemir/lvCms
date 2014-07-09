<?php

class Post extends \Eloquent {
	protected $fillable = [];

	public function cat(){
		return $this->belongsTo('Cat');
	}

		public function user(){
		return $this->belongsTo('User');
	}
}