<?php

class MensajeController extends BaseController {

	public function getMensajes(){

		$respuestas = Respuesta::with('mensaje')->get();

		return View::make('contacto')
			->with('respuestas',$respuestas);

	}

}