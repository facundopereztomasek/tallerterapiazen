<?php

class Respuesta extends Eloquent {

	protected $table = 'respuestas';

	public function mensaje(){
		return $this->belongsTo('mensaje');
	}

}
