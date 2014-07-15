<?php

class Album extends \Eloquent {
	protected $fillable = [];

	public function photo(){
		return $this->belongsTo('Photo');
	}
	
	public function albuminfo(){
		return $this->belongsTo('Albuminfo');
	}



}