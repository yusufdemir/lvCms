<?php

class Albuminfo extends \Eloquent {
	protected $fillable = [];

	public function album(){
		return $this->hasMany('Album');
	}

	public function photocount(){
		$count=$this->album()->where('deleted','=','0')->selectRaw('count(*) as count');
		return $count;
	}
}