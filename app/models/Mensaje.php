<?php

class Mensaje extends Eloquent {

	protected $table = 'mensajes';

	public function respuesta(){
		return $this->hasOne('respuesta');
	}
}
