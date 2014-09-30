<?php

class Teskilat extends Eloquent {

	protected $table = 'teskilat';

	public function sehir(){
		return $this->belongsTo('City','city','il_id');
	}
}