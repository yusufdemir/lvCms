<?php

class Photo extends \Eloquent {
	protected $fillable = [];

	public function album(){
		return $this->hasMany('Album');
	}
}