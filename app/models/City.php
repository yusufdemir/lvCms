<?php

class City extends Eloquent {

	protected $table = 'city';

	public function teskilat(){
			return $this->hasMany('Teskilat','il_id','city');
		}
}